<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function index(){
        return view ('admin.dashboard');
    }

    public function profile(){
        $struktur = Struktur::with('user')->get();
        return view('admin.profil', ['struktur' => $struktur]);
    }

    public function aspirasi(){
        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [ 
            'nim' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required',
            
        ]);
        
        $user = User::find($id);
		$struktur = Struktur::find($id);
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
        return redirect()->back();
    }
}