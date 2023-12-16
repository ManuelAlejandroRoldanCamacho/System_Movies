

@extends('layouts.app')

@section('title', $movie_details->title_movie)

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-1"></div>

            <div class="col-10 py-2">

                <h2 class="text-center py-2">Edit Movie Form</h2>

                <form action="{{ route('movies.update', $movie_details) }}" method="post" enctype="multipart/form-data">

                    @csrf @method('PATCH') 

                    <!-- Hacer una variante del formulario con un span que muestre la imagen actual en lugar del input file 
                    y un boton que leimine la imagen y otro agregar una nueva -->
                    @include('movies/forms-fields')

                    <div class="text-center">

                        <div class="btn-group">
                            <input class="btn btn-success mx-1 rounded" type="submit" value="Edit">
                            <a class="btn btn-primary text-decoration-none mx-1 rounded" href="{{ route('home') }}">Back</a>
                        </div>
    
                    </div>
                    
                </form>

            </div>
            
            <div class="col-1"></div>

        </div>

    </div>
    
@endsection