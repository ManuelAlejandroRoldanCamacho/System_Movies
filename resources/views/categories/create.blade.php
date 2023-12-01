
@extends('layouts.app')

@section('title', 'Register Category')

@section('content')

    <br>

    <h2>Register Category</h2>

    <form action="{{ route('category.store') }}" method="post">

        @csrf 

        @include('categories/forms-fields')

        <input type="submit" value="Register">

    </form>
    
@endsection