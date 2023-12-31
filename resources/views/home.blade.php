
@extends('layouts.guest')

@section('title', 'Home')

@section('content')

    <!-- 
    
        PENDIENTES: 

        1. Terminar la Barra de busqueda (usar la vista by_category a search_movie) - HECHO

        2. Arreglar los accesos en el headler (exceptions) - PENDIENTE
        
        3. Arreglar la consulta para que muestre peliculas diferentes (usar un numero aleatorio (idea 1)) - PENDIENTE

        4. Agregar la api de login con google/facebook/etc... - PENDIENTE

        5. Corregir la vista de show movies para que muestre las imagenes almacenadas (eliminar) y agregar otra nueva - PENDIENTE

        5.1 Corregir como se almacenan las imagenes (nombre) tomando la cadena de texto y convertirla
            quitando caracteres y dejandola algo asi: nombre_pelicula.jpg - PENDIENTE

    -->

    <div class="container">  
                
            <h1 class="h2 py-2 text-center">¡Most Popular Movies!</h1>

            @if (Auth::check() && Auth::user()->user_rol === 'Admin')
            
                <div class="col-12 text-center mx-auto">
                    <a class="btn btn-info mx-2" href="{{ route('movies.create') }}">Create a new movie</a>
                    <a class="btn btn-success mx-2" href="{{ route('category.index') }}">Show all category</a>                
                </div>
            
            @endif
    
            @foreach ($categories as $category)

                <h2 class="h4 py-3 text-center">{{ $category['category'] }}</h2>

                <div class="card-group">

                    <div class="row mx-auto">
                    
                        @foreach ($movies_by_categories[$category['category']] as $movie)                
                        
                            <div class="col-6 col-md-6 col-lg-3 col-xl-3 my-3">
                        
                                <a class="text-decoration-none" href="{{ route('movies.show', $movie->id_movie) }}">

                                    <div class="card border h-100">

                                        <img class="card-img-top d-none d-sm-block" src="{{ asset('/storage/images/'.$movie->image) }}" height="400px" width="auto" alt="Image of {{ $movie->title_movie }}">
                                        <img class="card-img-top d-block d-sm-none" src="{{ asset('/storage/images/'.$movie->image) }}" height="300px" width="auto" alt="Image of {{ $movie->title_movie }}">
                                        
                                        <div class="card-img-overlay">
                                            <span class="h6 text-warning font-weight-bold">{{ $movie->calification }} ★</span>
                                        </div>                                

                                        <div class="card-body text-center">

                                            <h5 class="card-title">{{ $movie->title_movie }}</h5>
                                        
                                            @if (Auth::check() && Auth::user()->user_rol === 'Admin')
                                    
                                                <div class="btn-group">
                                                    
                                                    <a class="btn btn-warning rounded mx-1" href="{{ route('movies.edit', $movie->id_movie) }}">Edit</a>
                                                
                                                    <button class="btn btn-danger rounded mx-1" data-bs-toggle="modal" data-bs-target="#modal{{ $movie->id_movie }}">Delete</button>
                                            
                                                    <div class="modal fade" id="modal{{ $movie->id_movie }}" data-bs-backdrop="static">
                                                    
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                    
                                                            <div class="modal-content">
        
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Delete Movie?</h5>
                                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                    
                                                                <div class="modal-body">
                                                                
                                                                    <p>If you decide to delete the movie <b>{{ $movie->title_movie }}</b> it cannot be recovered and will be permanently deleted from the database, are you sure?</p>
                                                                
                                                                </div>
                                                    
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                                                                    <form action="{{ route('movies.destroy', $movie->id_movie) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                
                                                                        <button class="btn btn-danger" type="submit">I'm sure</button>
                                                                    </form>
                                                                </div>
                                                    
                                                            </div>
                                                    
                                                        </div>
                                            
                                                    </div>
                                    
                                                </div>                                               
        
                                            @endif    

                                        </div>

                                    </div>
                                
                                </a>
                            
                            </div>
                            
                        @endforeach

                    </div>    

                </div>

            @endforeach
                    
        </div>
            
    </div>

@endsection