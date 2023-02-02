<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        return view('register');
    }

    public function processRegistration(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'name_bn' => '',
            'avatar' => '',
            'mobile' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:6|max:30|unique:users,username',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        //Convert the provided password to HASHED version
        $attributes['password'] = bcrypt($attributes['password']);

        unset($attributes['password_confirmation']);

        $user = User::create( $attributes );

        //Logged In the registered user automatically
        auth()->login( $user );

        return redirect('/')->withSuccess('Registration Successfull.');
    }
}
