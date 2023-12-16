
@extends('layouts.app')

@section('title', 'Register Category')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-1 col-md-2 col-lg-2"></div>

            <div class="col-10 col-md-8 col-lg-8">
                
                <h1 class="h2 text-center my-5">Add a New Category</h1>

                <form class="input-group" action="{{ route('category.store') }}" method="post">

                    @csrf 

                    @include('categories/forms-fields')

                    <div class="col-12 text-center my-3">

                        <a class="btn btn-warning" href="{{ route('category.index') }}">Back</a>

                        <input class="btn btn-success" type="submit" value="Register">

                    </div>

                </form>
                
            </div>

            <div class="col-1 col-md-2 col-lg-2"></div>

        </div>

        <div class="py-5"></div>

        <div class="py-5"></div>

        <div class="py-5"></div>

    </div>
    
@endsection