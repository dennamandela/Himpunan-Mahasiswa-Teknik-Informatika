<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return view ('admin.dashboard');
    }

    public function profile(){
        $struktur = Struktur::with('user')->get();
        return view('admin.profil', ['struktur' => $struktur]);
    }

    public function update(Request $request, $id){
        $struktur = Struktur::with('user')->get();
        $file = $struktur->foto;

        $data = [
            'nim' => $request['nim'],
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'foto' => $file,
            'user_id' => Auth::user()->id,
        ];
        
        $request->foto->move(public_path().'/images/struktur', $file);
        $struktur->update($data);
        return redirect('/profile');
    }
}
