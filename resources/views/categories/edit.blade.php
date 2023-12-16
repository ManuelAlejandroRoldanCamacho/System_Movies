
@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-1 col-md-2 col-lg-2"></div>

            <div class="col-10 col-md-8 col-lg-8">
                
                <div class="row">

                    <h1 class="h2 text-center my-5">Edit Category Form</h1>

                    <form class="input-group" action="{{ route('category.update', $category_details) }}" method="post">

                        @csrf @method('PATCH')

                        @include('categories/forms-fields')
                        
                        <div class="col-12 text-center my-3">

                            <a class="btn btn-warning" href="{{ route('category.index') }}">Back</a>

                            <input class="btn btn-success" type="submit" value="Edit">

                        </div>

                    </form>

                </div>
                
            </div>

            <div class="col-1 col-md-2 col-lg-2"></div>

        </div>

        <div class="py-5"></div>

        <div class="py-5"></div>

        <div class="py-5"></div>

    </div>

@endsection