<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function loginForm(){
    //     return view('forms.login');
    // }

    public function loginForm() {
        if(auth()->check()) {
            return redirect('/home');
        }

        return view('forms.login');
    }
    public function login(Request $request) {
        $request->validate([
            'password'          =>      'required|string',
            'email'             =>      'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at == null) {
            return redirect('/')->with('error', 'Sorry your account is not yet verified or does not exist');
        }

        $login = auth()->attempt([
            'email'     =>  $request->email,
            'password'  =>  $request->password
        ]);

        if(!$login){
            return back()->with('error', 'Password is incorrect');
        }

        // if (auth()->user()->is_admin) {
        //     return redirect()->intended('admin');
        // }

        return redirect('/home');
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
