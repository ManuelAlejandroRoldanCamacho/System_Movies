
@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-1 col-md-2 col-lg-2"></div>

            <div class="col-10  col-md-8 col-lg-8">

                <h1 class="text-center h2 my-2">Administration of categories</h1>

                @if (Auth::check() && Auth::user()->user_rol === 'Admin')
                    
                    <div class="text-center py-3">

                        <a class="btn btn-primary" href="{{ route('category.create') }}">Add a new category</a>

                    </div>

                    <table class="table table-hover table-secondary">

                        <thead>
                            <tr class="text-center">
                                <th class="h4">Category</th>
                                <th class="h4">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            @foreach ($categories as $category)

                                <tr>

                                    <td class="text-center align-items-center justify-content-center">
                                        <a class="h5 text-decoration-none" href="{{ route('category.show', $category->id_category) }}">{{ $category->category }}</a>
                                    </td>
                                    
                                    <td class="text-center">

                                        <div class="btn-group py-1">
                                            <a class="btn btn-warning text-decoration-none mx-1 rounded" href="{{ route('category.edit', $category->id_category) }}">Edit</a>
    
                                            <button class="btn btn-danger rounded mx-1" data-bs-toggle="modal" data-bs-target="#modal{{ $category->id_category }}">Delete</button>
                                
                                            <div class="modal fade" id="modal{{ $category->id_category }}" data-bs-backdrop="static">
                                            
                                                <div class="modal-dialog modal-dialog-scrollable">
                                            
                                                    <div class="modal-content">
    
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Category?</h5>
                                                            <button class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                            
                                                        <div class="modal-body">
                                                        
                                                            <p>If you decide to delete the category <b>{{ $category->category }}</b> it cannot be recovered and will be permanently deleted from the database, are you sure?</p>
                                                        
                                                        </div>
                                            
                                                        <div class="modal-footer">
                                                            <button class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                                                            
                                                            <form action="{{ route('category.destroy', $category->id_category) }}" method="post">
                    
                                                                @csrf
                                                                @method('DELETE')
                    
                                                                <button class="btn btn-danger mx-1" type="submit">I'm sure'</button>
                    
                                                            </form>
                                                        </div>
                                            
                                                    </div>
                                            
                                                </div>
                                    
                                            </div>
                            
                                        </div>

                                    </td>
                                    
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                    @else

                        @foreach ($categories as $category)

                            <div class="text-center">

                                <a class="h5 text-decoration-none" href="{{ route('category.show', $category->id_category) }}">{{ $category->category }}</a>

                            </div>
                        
                        @endforeach

                    @endif
                    
                    <div class="text-center my-3">

                        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>

                    </div>
                
                </div>
                
            </div>

            <div class="col-1 col-md-2 col-lg-2"></div>

        </div>
        
@endsection