
@extends('layouts.app')

@section('title', $category_details->category)

@section('content')

    <div>

        <h1>{{ $category_details->category }}</h1>

        <a href="{{ route('category.index') }}">Regresar</a>

    </div>
    
@endsection