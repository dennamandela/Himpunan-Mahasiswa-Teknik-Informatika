<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function editProfil(){
        $anggota = Anggota::with('user')->get();
        return view('user.profil', compact('anggota'));
    }

    public function createAspirasi(){
        return view('user.aspirasi');
    }

    public function updateProfil(Request $request, $id){
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'program_studi' => 'required',
            'tanggal_lahir' => 'required',
            'angkatan' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'foto' => 'required',
        ]);

        $anggota = Anggota::find($id);
        $file = $anggota->foto;

        $data = [
            'nim' => $request['nim'],
            'nama_anggota' => $request['nama_anggota'],
            'program_studi' => $request['program_studi'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'angkatan' => $request['angkatan'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'agama' => $request['agama'],
            'foto' => $request->$file,
            'user_id' => Auth::user()->id,
        ];

        $request->foto->move(public_path().'/images/anggota', $file);
        $anggota->update($data);
        return redirect()->back();
    } 
}
