@extends('layouts.guest')

@section('title', 'Register')

@section('content')

    <h1>Register</h1>

    <form enctype="multipart/form-data" action="{{ route('register') }}" method="post">

        @csrf

        <label for="user_first_name">Name: </label>
        <input type="text" name="user_first_name" value="{{ old('user_first_name') }}" autofocus='autofocus' required>
        @error('user_first_name')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <label for="user_last_name">Last Name: </label>
        <input type="text" name="user_last_name" value="{{ old('user_last_name') }}" required>
        @error('user_last_name')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <label for="email">Email: </label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <label for="date_birth">Date of Birth: </label>
        <input type="date" name="date_birth" value="{{ old('date_birth') }}" required>
        @error('date_birth')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <label for="phone_number">Phone Number: </label>
        <input type="number" name="phone_number" value="{{ old('phone_number') }}" required>
        @error('phone_number')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <label for="password">Password: </label>
        <input type="password" name="password" required>
        @error('password')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <label for="password_confirmation">Password Confirmation: </label>
        <input type="password" name="password_confirmation" required>
        @error('password_confirmation')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <label for="user_photo">Photo: </label>
        <input type="file" name="user_photo">
        @error('user_photo')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror

        <br>
        <br>

        <button type="submit">Register</button>

        <a href="{{ route('login') }}">Do you have a account? Login</a>

    </form>

@endsection