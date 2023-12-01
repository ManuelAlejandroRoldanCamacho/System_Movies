
@extends('layouts.app')

@section('title', 'Categories Index')

@section('content')

    <div>

        <h1>Listado de Categorias</h1>

        @if (Auth::check() && Auth::user()->user_rol === 'Admin')
            {{-- Contenido que solo se mostrará si el usuario es un administrador --}}
                
            <h4><a href="{{ route('category.create') }}">Create a new category</a></h4>

            @foreach ($categories as $category)

                <h4><a href="{{ route('category.show', $category->id_category) }}">{{ $category->category }}</a></h4>

                <a href="{{ route('category.edit', $category->id_category) }}">Edit</a>

                <form action="{{ route('category.destroy', $category->id_category) }}" method="post">

                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>

                </form>

            @endforeach

        @else

            @foreach ($categories as $category)

                <h4><a href="{{ route('category.show', $category->id_category) }}">{{ $category->category }}</a></h4>
            
            @endforeach

        @endif
        
        <a href="{{ route('home') }}">Regresar</a>

    </div>
    
@endsection