@extends('layouts.guest')

@section('title', 'Register')

@section('content')

    <div class="container py-3">

        <h1 class="h3 text-center py-1">User Register</h1>

        <form enctype="multipart/form-data" action="{{ route('register') }}" method="post">

            @csrf

            <div class="input-group my-3">
                <span class="input-group-text">First Name</span>
                <input class="form-control" type="text" name="user_first_name" value="{{ old('user_first_name') }}" placeholder="Example: John" required>
            </div>
            @error('user_first_name')
                    <br>
                    <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror
            
            <div class="input-group my-3">
                <span class="input-group-text">Last Name</span>
                <input class="form-control" type="text" name="user_last_name" value="{{ old('user_last_name') }}" placeholder="Example: Doe" required>
            </div>
            @error('user_last_name')
                <br>
                <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror

            <div class="input-group my-3">
                <span class="input-group-text">Email</span>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Example: JohnDoe@example.com" required>
            </div>
            @error('email')
                <br>
                <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror

            <div class="input-group my-3">
                <span class="input-group-text">Date of Birth</span>
                <input class="form-control" type="date" name="date_birth" value="{{ old('date_birth') }}" required>
            </div>
            @error('date_birth')
                <br>
                <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror

            <div class="input-group my-3">
                <span class="input-group-text">Phone Number</span>
                <input class="form-control" type="number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Example: XXX-XXXX-XXX" required>
            </div>
            @error('phone_number')
                <br>
                <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror

            <div class="input-group my-3">
                <span class="input-group-text">Password</span>
                <input class="form-control" type="password" name="password" required>
            </div>
            @error('password')
                <br>
                <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror

            <div class="input-group my-3">
                <span class="input-group-text">Password Confirmation</span>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>
            @error('password_confirmation')
                <br>
                <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror

            <div class="input-group my-3">
                <input class="form-control" type="file" name="user_photo">
            </div>
            @error('user_photo')
                <br>
                <small class="msg-error invalid-feedback">{{ $message }}</small>
            @enderror

            <button class="btn btn-success" type="submit">Register</button>

            <a class="link" href="{{ route('login') }}">Do you have a account? Login</a>

        </form>

    </div>
    
@endsection