
@extends('layouts.app')

@section('title', 'Movies By Category')

@section('content')

<h1>Movies By Category</h1>

    @foreach ($movies as $movie)

                <a href="{{ route('movies.show', $movie->id_movie) }}">{{ $movie->title_movie }}</a>

                <p>{{ $movie->image }}</p>
                
                <img src="{{ asset('/storage/images/'.$movie->image) }}" height="100px" width="100px" alt="Image of {{ $movie->title_movie }}">

                <p>{{ $movie->calification }} Estrellas</p>

                <p>{{ $movie->description_movie }}</p>

            </div>
        
    @endforeach

@endsection