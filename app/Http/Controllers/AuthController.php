<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Anggota;
use Auth;
use Session;

class AuthController extends Controller
{

    public function login(){
        return view('auth.login');
    }

    public function proseslogin(Request $request){

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/dashboard');
            } elseif ($user->role == 'writer') {
                return redirect('/dashboard');
            } elseif($user->role == 'anggota') {
                return redirect('/anggota/home');
            } else {
                $request->session()->flash('error', 'Email dan Password yang Anda masukkan salah!');
                return redirect('/login');
            }
        }
    }

    public function register(){
        return view ('auth.register');
    }

    public function postregister(Request $request){
        $user = new \App\Models\User;
        $user->role = 'anggota';
        $user->name = $request->nama_anggota;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $anggota = \App\Models\Anggota::create($request->all());

        return redirect('/login');
    }

    public function ubahPassword(Request $request) {
        $this->validate($request,[
            'current_password' => 'required',
            'password' => 'required', 'confirmed',
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)){
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('message', 'Kata sandi Anda telah diperbarui');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Kata sandi Anda saat ini tidak cocok dengan catatan kami',   
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
