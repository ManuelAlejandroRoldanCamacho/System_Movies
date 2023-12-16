
@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-1 col-md-2 col-lg-2"></div>

            <div class="col-10 col-md-8 col-lg-8 my-3">
                
                <h2 class="h3 text-center">Add a New Movie</h2>

                <form enctype="multipart/form-data" action="{{ route('movies.store') }}" method="post">
            
                    @csrf    
                    
                        @include('movies/forms-fields')
                
                        <div class="col-12 text-center">
                            <input class="btn btn-success" type="submit" value="Register">
                            <a class="btn btn-primary text-decoration-none my-2" href="{{ route('home') }}">Back</a>
                        </div>

                </form>                    

            </div>

            <div class="col-1 col-md-2 col-lg-2"></div>

        </div>
        
    </div>
    
@endsection