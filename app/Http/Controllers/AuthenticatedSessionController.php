<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{

    public function store(LoginRequest $request) {

        $credentials = $request->only('email', 'password');

        if(!Auth::attempt($credentials, $request->boolean('remember'))){

            throw ValidationException::withMessages([

                'email' => __('auth.failed'),
                'password' => __('auth.password'),

            ]);

        }

        $request->session()->regenerate();

        return redirect()->intended()->with('message','You are logged in'); 

    }

    public function destroy(Request $request){

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login')->with('You are logout');

    }

}
