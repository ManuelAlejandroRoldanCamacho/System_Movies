
@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    <div class="container">

        <div class="row"></div>

        <div class="row">

            <h1 class="h3 text-center my-4">Login</h1>

            <div class="col-1 col-md-2 col-lg-2"></div>

            <div class="col-10 col-md-8 col-lg-8 py-4">

                <form action="{{ route('login') }}" method="post">
                    @csrf
    
                    <div class="input-group my-3">
                        <span class="input-group-text">User Name</span>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Example: JohnDoe@example.com" required>
                    </div>
                    @error('email')
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
            
                    <input class="form-check-input" type="checkbox" name="remember"> 
                    <span class="form-cheel-label">Remember</span>
            
                    <button class="btn btn-primary" type="submit">Login</button>
            
                    <a class="link" href="#">Forgot your password?</a>

                </form>    

            </div>

            <div class="col-1 col-md-2 col-lg-2"></div>

        </div>
        
        <div class="py-5"></div>

        <div class="py-5"></div>

        <div class="py-4"></div>


    </div>

@endsection