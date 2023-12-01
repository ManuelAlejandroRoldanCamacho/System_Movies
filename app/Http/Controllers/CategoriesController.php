<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $categories = categories::get()->where('is_deleted', 0);

        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create', ['category_details' => new Categories]); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesRequest $request)
    {

        $select_query = Categories::where('category',$request->input('category'))->get();

        if($request && $select_query->isEmpty()){

            Categories::create($request->validated());
            return to_route('home')->with('status', 'Category Created!'); 

        }else {
            return to_route('home')->with('status', 'The Category already exists!'); 
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $category)
    {
        return view('categories.show', ['category_details' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $category)
    {
        return view('categories.edit', ['category_details' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesRequest $request, Categories $category)
    {

        $category->update($request->validated());
        return to_route('category.show',  $category)->with('status', 'Category Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {

        /* Pendiente Esto debe eliminar de verdad
        
           $select_query = Categories::where('category',$request->input('category'))->get();
        */

        $category->update(['is_deleted' => '1']);
        return to_route('home',  $category)->with('status', 'Category Deleted!');
    }
}
