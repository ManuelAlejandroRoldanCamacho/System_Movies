
@extends('layouts.app')

@section('title', $movie_details->title_movie)

@section('content')

    <div class="container-fluid">

            <div class="row">
                
                <div class="col-12 text-center">
                    <h1 class="h2 py-3">{{ $movie_details->title_movie }}</h1>

                </div>

                <div class="d-none d-sm-block col-md-2 col-lg-2"></div>
                
                <div class="col-sm-12 col-md-8 col-lg-8">

                    <div class="card">

                        <div class="row">
    
                            <div class="col-sm-5 col-md-4 col-lg-4">
    
                                <div class="card-head">
    
                                    <img class="card-img" src="{{ asset('/storage/images/'. $movie_details->image ) }}" height="auto" width="auto" alt="Imagen promocional de {{ $movie_details->image }}">
    
                                    <div class="card-img-overlay">
                                        <span class="h6 text-warning">{{ $movie_details->calification }} ★</span>
                                    </div>
    
                                </div>
    
                            </div>
    
                            <div class="cols-sm-5 col-md-8 col-lg-8">
                                    
                                <div class="card-body text-center">
    
                                    <p>{{ $movie_details->description_movie }}.</p>
    
                                    <p>Release Date: {{ $movie_details->release_date }}</p>
    
                                    <p>Duration: {{ $movie_details->duration }}</p>
    
                                    @if (Auth::check() && Auth::user()->user_rol === 'Admin')
                                        
                                        <form action="{{ route('category_movie.modification', $movie_details->id_movie) }}" method="post">
                                            @csrf
    
                                            @foreach ($movie_categories as $movie_category)
    
                                                <input class="form-check-input" type="checkbox" name="categories[]"  value="{{ $movie_category->id_category }}" checked>
                                                <label class="form-check-label" for="chechbox">{{ $movie_category->category }}</label>
                                                
                                            @endforeach
    
                                            @foreach ($categories as $category)
    
                                                <input class="form-check-input" type="checkbox" name="categories[]" value=" {{ $category->id_category }}">
                                                <label class="form-check-label" for="chechbox">{{ $category->category }}</label>
    
                                            @endforeach
    
                                            <br>

                                            <input class="btn btn-primary my-2" type="submit" name="edit_movies_categories" value="Edit">
    
                                        </form>
                                        
                                    @else
    
                                        <!-- Vista para usuarios -->
                                        <ul class="list-unstyled">
    
                                            @foreach ($movie_categories as $movie_category)
    
                                                <li class="d-inline mx-1"><a class="text-decoration-none" href="{{ route('movies.by_category', $movie_category->id_category) }}">{{ $movie_category->category }}</a></li>    
    
                                            @endforeach
                                
                                        </ul>
    
                                    @endif
                                
                                </div>
    
                            </div>
    
                        </div>
                        
                    </div>    

                </div>
           
                <div class="d-none d-sm-block col-md-2 col-lg-2"></div>
    
                <div class="d-none d-sm-block col-md-2 col-lg-2"></div>
    
                <div class="col-sm-12 col-md-8 col-lg-8 my-3">

                    @auth

                        <iframe class="w-100 rounded" height="500px" src="{{ $movie_details->trailler }}" frameborder="0" allowfullscreen></iframe>
    
                    @endauth

                    <div class="text-center mt-2">
                        <a class="btn btn-success text-decoration-none" href="{{ route('home') }}">Back</a>
                    </div>

                </div>

                <div class="d-none d-sm-block col-md-2 col-lg-2"></div>

            </div>

        </div>

    </div>   
    
@endsection