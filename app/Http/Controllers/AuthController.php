<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Auth;
use Session;

class AuthController extends Controller
{

    public function login(){
        return view('auth.login');
    }

    public function proseslogin(Request $request){
        if(Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        } else {
            $request->session()->flash('error', 'Email dan Password Anda salah!');
            return redirect('/login');
        }
    }

    public function register(){
        return view ('auth.register');
    }

    public function postregister(Request $request){
        $user = new \App\Models\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(50);
        $user->role = "admin";
        $user->save();

        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
