<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login()
    {

        return view('login');
        
    }

    public function processLogin()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $redirect = request()->input('refferer') ?? '';

        if( auth()->attempt($attributes) )
        {
            if( $redirect != '' )
            {
                return redirect($redirect)->withSuccess('Welcome! Login done Successfully.');
            }

            return redirect('admin/dashboard')->withSuccess('Welcome to Dashboard!');
        }

        return back()->withInput()->withError('Email and Password does not matched with the database.');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {

        $redirect = $request->input('refferer') ?? '';

        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        if( $redirect != '' )
        {
            return redirect($redirect)->with('info', 'You have logged out from the system.');
        }
    
        return redirect('/login')->with('info', 'You have logged out from the system.');

    }

    public function guestLogout(Request $request)
    {
        return $this->logout($request);
    }

}
