
@extends('layouts.app')

@section('title', $movie_details->title_movie)

@section('content')

    <div>

        <h1>{{ $movie_details->title_movie }}</h1>

        <img src="{{ asset('/storage/images/'. $movie_details->image ) }}" height="400px" width="350px" alt="Imagen promocional de {{ $movie_details->image }}">

        <div>

            <P>Calificacion: {{ $movie_details->calification }} Estrellas</P>

            <p>Estreno: {{ $movie_details->release_date }}</p>

            <p>Duracion: {{ $movie_details->duration }}</p>

            <p>Generes: </p>

            @if (Auth::check() && Auth::user()->user_rol === 'Admin')
            {{-- Contenido que solo se mostrará si el usuario es un administrador --}}
            
                <form action="{{ route('category_movie.modification', $movie_details->id_movie) }}" method="post">
                    @csrf

                    <!-- terminar LA VALIDACION DE USUARIO Y LOS MIDDLEWARES -->

                    @foreach ($movie_categories as $movie_category)

                        <input type="checkbox" name="categories[]"  value="{{ $movie_category->id_category }}" checked>
                        <label for="chechbox">{{ $movie_category->category }}</label>
                        
                    @endforeach

                    @foreach ($categories as $category)

                        <input type="checkbox" name="categories[]" value=" {{ $category->id_category }}">
                        <label for="chechbox">{{ $category->category }}</label>

                    @endforeach

                    <input type="submit" name="edit_movies_categories" value="Edit">

                </form>

            @else

                <ul>

                    <!-- Vista para usuarios -->
                    @foreach ($movie_categories as $movie_category)

                        <li><a href="{{ route('movies.by_category', $movie_category->id_category) }}">{{ $movie_category->category }}</a></li>    

                    @endforeach
        
                </ul>

            @endif

        </div>     

        <p>{{ $movie_details->description }}</p>

        <iframe width="560" height="315" src="{{ $movie_details->trailler }}" frameborder="0" allowfullscreen></iframe>

        <br> 

        <a href="{{ route('home') }}">Regresar</a>

    </div>
    
    

@endsection