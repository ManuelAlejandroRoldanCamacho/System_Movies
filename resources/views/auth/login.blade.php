
@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    <br>
    <br>

    <form action="{{ route('login') }}" method="post">

        @csrf

        <label for="email">User</label>
        <input type="email" name="email" required value="{{ old('email') }}" autofocus='autofocus'>
        @error('email')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>

        <label for="password">Password</label>
        <input type="password" name="password" required>
        @error('password')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>

        <input type="checkbox" name="remember"> 
        <span>Remember</span>

        <br>

        <button type="submit">Login</button>

        <br>

        <a href="#">Forgot your password?</a>
        <a href="{{ route('register') }}">Don't have an account? Register</a>

    </form>

    <br>

@endsection