
@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <br>

    <h2>Register Movie</h2>

    <form enctype="multipart/form-data" action="{{ route('movies.store') }}" method="post">

        @csrf <!-- obligatorio para que el formluario funcione (evita ataques csrf, validando el origen del formulario) -->

        @include('movies/forms-fields')

        <input type="submit" value="Register">

    </form>
    
@endsection