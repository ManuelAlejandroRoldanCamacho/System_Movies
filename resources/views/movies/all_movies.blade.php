
@extends('layouts.app')

@section('title', 'All Movies')

@section('content')

<h1>All Movies</h1>

    <br>

    @foreach ($movies as $movie)

            <div>

                <a href="{{ route('movies.show', $movie->id_movie) }}">{{ $movie->title_movie }}</a>

                <br>

                <p>{{ $movie->image }}</p>
                
                <img src="{{ asset('/storage/images/'.$movie->image) }}" height="100px" width="100px" alt="Image of {{ $movie->title_movie }}">

                <p>{{ $movie->calification }} Estrellas</p>

                <p>{{ $movie->description_movie }}</p>

                <br>

            </div>
        
    @endforeach

@endsection