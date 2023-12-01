<?php

namespace App\Http\Controllers;

use App\Models\Movies_Categories;
use App\Models\Movie;
use App\Http\Requests\Movies_CategoriesRequest;

class MoviesCategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin', ['only' => ['category_modification', 'add_new_categories', 'delete_categories']]);
    }

    public function category_modification (Movie $movie, Movies_CategoriesRequest $request)
    {
        
        $movies_categories_in_db = Movies_Categories::where('id_movie', $movie->id_movie)
                                    ->from('movies_categories')
                                    ->pluck('id_category')
                                    ->toArray();

        $categories = $request->input('categories');

        /* Verificar las diferencias entre los arrays */
        $newCategories = array_diff($categories, $movies_categories_in_db);
        $removedCategories = array_diff($movies_categories_in_db, $categories);

        if(!empty($newCategories)){
            $this->add_new_categories($newCategories, $movie);
        }
        
        if (!empty($removedCategories)){
            $this->delete_categories($removedCategories, $movie);
        }

        return to_route('home')->with('status', 'Movies Categories Succeful Modification!');
    }

    public function add_new_categories ($newCategories, Movie $movie) 
    {
        $movies_categories = new Movies_Categories();
        foreach($newCategories as $category){
            $movies_categories->id_movie = $movie->id_movie;
            $movies_categories->id_category = $category;
            $movies_categories->save();
        }

    }

    public function delete_categories ($removedCategories, $movie)
    {
        
        foreach($removedCategories as $category){
        
            Movies_Categories::where('id_movie', $movie->id_movie)
                                ->where('id_category', $category)
                                ->delete();

        }

    }

}
