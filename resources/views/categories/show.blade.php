
@extends('layouts.app')

@section('title', $category_details->category)

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-1 col-md-2 col-lg-2"></div>

            <div class="col-10 col-md-8 col-lg-8">
                
                <h1 class="h2 text-center py-3">{{ $category_details->category }}</h1>

                <!-- TERMINAR ESTA COSA Y MOSTRAR TODAS LAS PELICULAS POR ESTA CATEGORIA -->

                <div class="text-center my-3">
                    <a class="btn btn-primary text-decoration-none" href="{{ route('category.index') }}">Back</a>
                </div>

            </div>

            <div class="col-1 col-md-2 col-lg-2"></div>

        </div>

    </div>
    
@endsection