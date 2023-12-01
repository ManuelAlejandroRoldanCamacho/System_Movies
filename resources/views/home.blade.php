
@extends('layouts.guest')

@section('title', 'Home')

@section('content')

    <h1>Home</h1>

    <h4><a href="{{ route('movies.all') }}">All Movies</a></h4>

    @if (Auth::check() && Auth::user()->user_rol === 'Admin')
        {{-- Contenido que solo se mostrará si el usuario es un administrador --}}
        <h4><a href="{{ route('movies.create') }}">Create a new movie</a></h4>
        <h4><a href="{{ route('category.index') }}">Show all category</a></h4> 
    @endif

    <br>

    @foreach ($categories as $category)

        <h3>{{ $category['category'] }}</h3>
        <br>

        <!-- Recorremos el array asociativo, para la categoria que recorre la seccion de la categoria respectiva y retorna las peliculas -->
        @foreach ($movies_by_categories[$category['category']] as $movie)
            
            <div>

                <a href="{{ route('movies.show', $movie->id_movie) }}">{{ $movie->title_movie }}</a>

                <br>

                <p>{{ $movie->image }}</p>
                
                <img src="{{ asset('/storage/images/'.$movie->image) }}" height="100px" width="100px" alt="Image of {{ $movie->title_movie }}">

                <p>{{ $movie->calification }} Estrellas</p>

                <p>{{ $movie->description_movie }}</p>

                @if (Auth::check() && Auth::user()->user_rol === 'Admin')
                    {{-- Contenido que solo se mostrará si el usuario es un administrador --}}
                    <a href="{{ route('movies.edit', $movie->id_movie) }}">Edit Movie</a>

                    <form action="{{ route('movies.destroy', $movie->id_movie) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete Movie</button>
                    </form>                    
                @endif
               
                <br>
                <br>

            </div>

        @endforeach

    @endforeach

@endsection