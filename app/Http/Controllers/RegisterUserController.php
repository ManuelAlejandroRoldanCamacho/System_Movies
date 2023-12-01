<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Storage;

class RegisterUserController extends Controller
{

    public function store(RegisterRequest $request){

        $password_encrypt = bcrypt($request['password']);

        if(empty($request->user_photo)){

            User::create([
                'user_first_name' => $request->user_first_name,
                'user_last_name' => $request->user_last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'date_birth' => $request->date_birth,
                'password' => $password_encrypt,
            ]);

        }else {

            $name_image = $request->file('user_photo')->getClientOriginalName(); 

            $filePath = 'public/images_users/' . $name_image;

            if(!Storage::exists($filePath)){ 
                $request->file('user_photo')->storeAs('public/images_users', $name_image);
            }

            User::create([
                'user_first_name' => $request->user_first_name,
                'user_last_name' => $request->user_last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'date_birth' => $request->date_birth,
                'password' => $password_encrypt,
                'user_photo' => $name_image,
            ]);

        }

        return to_route('home')->with('User Created!');

    }

}
