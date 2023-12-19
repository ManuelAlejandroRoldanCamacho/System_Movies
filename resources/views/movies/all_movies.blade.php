
@extends('layouts.app')

@section('title', 'Movies')

@section('content')

    <div class="container">

        <h1 class="h2 text-center py-2">Movies</h1>
        
        <div class="card-group">

            <div class="row">

                @foreach ($movies as $movie)

                    <div class="col-6 col-md-6 col-lg-3 col-xl-3 my-3">

                        <a class="text-decoration-none" href="{{ route('movies.show', $movie->id_movie) }}">

                            <div class="card border h-100">

                                <img class="card-img-top d-none d-sm-block" src="{{ asset('/storage/images/'.$movie->image) }}" height="400px" width="auto" alt="Image of {{ $movie->title_movie }}">
                                <img class="card-img-top d-block d-sm-none" src="{{ asset('/storage/images/'.$movie->image) }}" height="300px" width="auto" alt="Image of {{ $movie->title_movie }}">

                                <div class="card-img-overlay">
                                    <span class="h6 text-warning font-weight-bold">{{ $movie->calification }} ★</span>
                                </div>                                

                                <div class="card-body text-center">
        
                                    <h6 class="card-title">{{ $movie->title_movie }}</h6>

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

    </div>

@endsection