<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoviesRequest;
use App\Models\Movie;
use App\Models\Categories;
use App\Models\Movies_Categories;
use Illuminate\Support\Facades\Storage;

class MoviesController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show', 'all_movies', 'movies_by_categories']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $categories = Categories::get();

        foreach($categories as $category){

            //pendiente arreglar esta monda para que muestre peliculas diferentes para cada categoria
            $select = Movie::from('movies_categories as mc')
                    ->select('m.id_movie', 'm.title_movie', 'm.description_movie' ,'m.calification', 'm.image')
                    ->join('movies as m', 'mc.id_movie', '=', 'm.id_movie')
                    ->join('categories as c', 'c.id_category', '=', 'mc.id_category')
                    ->where('mc.id_category', $category->id_category)
                    ->orderby('m.calification', 'desc')
                    ->take(8)
                    ->get(); 
            
            $movies_by_category[$category->category] = $select;

        }

        return view('home', ['movies_by_categories' => $movies_by_category, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create', ['movie_details' => new Movie]); //enviamos una variable vacia
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MoviesRequest $request)
    {

        $select_query = Movie::where('title_movie',$request->input('title_movie'))->get();

        if($select_query->isEmpty()){

            $name_image = $request->file('image')->getClientOriginalName(); 

            $request->file('image')->storeAs('public/images', $name_image);

            $request->merge(['image' => $name_image]); 

            $movieData = $request->validated(); 

            $movieData['image'] = $name_image;

            Movie::create($movieData);

            return to_route('home')->with('status', 'Movie Created!'); 

        }else {
            return to_route('home')->with('status', 'The Movie already exists!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $id_movie)
    {

        $movies_categories = Movies_Categories::from('movies_categories AS mc')
		    ->join('categories as c', 'c.id_category', '=', 'mc.id_category')
            ->join('movies as m', 'm.id_movie', '=', 'mc.id_movie')
		    ->select('c.category', 'c.id_category')
		    ->where('mc.id_movie', $id_movie->id_movie)
            ->get();

        //documentar esto en el .txt
        $categories_not_used = Movies_Categories::select('mc.id_category', 'c.category')
            ->distinct()
            ->from('movies_categories AS mc')
            ->join('categories AS c', 'c.id_category', '=', 'mc.id_category')
            ->whereNotIn('mc.id_category', function ($query) use ($id_movie) {
                $query->select('id_category')
                    ->distinct()
                    ->from('movies_categories')
                    ->where('id_movie', $id_movie->id_movie);
            })
            ->get();

        return view('movies.show', ['movie_details' => $id_movie, 'movie_categories' => $movies_categories ,'categories' => $categories_not_used]); //retorna los datos de la pelicula en detalle
    
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $id_movie) //pendiente revisar la funcion de editar
    {
        return view('movies.edit', ['movie_details' => $id_movie]); //retorna los datos de la pelicula a la vista edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MoviesRequest $request, Movie $id_movie)
    {

        //Valida si el campo image en el formulario viene vacio

        if (!empty($request->file('image'))) { //dd($request->file('image'));

            $name_image = $request->file('image')->getClientOriginalName(); 

            $filePath = 'public/images/' . $name_image;

            if(!Storage::exists($filePath)){ //verificamos la existencia de la imagen con ese nombre en la ruta
                $request->file('image')->storeAs('public/images', $name_image);
            }

            $request->merge(['image' => $name_image]);

            $movieData = $request->validated(); 

            $movieData['image'] = $name_image;

            $id_movie->update($movieData);

            return to_route('movies.show',  $id_movie)->with('status', 'Movie Updated!');

        } else {

            $before_image = Movie::select('image')->where('id_movie', $id_movie->id_movie)->get();

            $request['image'] = $before_image;

            $movieData = $request->validated(); 

            $id_movie->update($movieData);

            return to_route('movies.show',  $id_movie)->with('status', 'Movie Updated!');

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $id_movie)
    {

        $id_movie->delete();
        return to_route('home',  $id_movie)->with('status', 'Movie Deleted!');
        
    }
    

    public function all_movies(){

        $movies = Movie::from('movies AS m')
		    ->select('m.id_movie', 'm.title_movie', 'm.description_movie' ,'m.calification', 'm.image')
            ->get();

        return view('movies.all_movies', ['movies' => $movies]);

    }

    
    public function movies_by_category(Categories $id_category){

        $movies = Movies_Categories::from('movies_categories AS mc')
            ->join('categories as c', 'c.id_category', '=', 'mc.id_category')
            ->join('movies as m', 'm.id_movie', '=', 'mc.id_movie')
            ->select('m.id_movie', 'm.title_movie', 'm.description_movie' ,'m.calification', 'm.image')
		    ->where('mc.id_category', $id_category->id_category)
            ->get();

        return view('movies.by_category', ['movies' => $movies]);

    }

}
