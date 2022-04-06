<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\User;
use App\Models\Aspirasi;
use Auth;
use Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index(){
        $aspirasi = Aspirasi::with('user')->get();
        return view('user.home', compact('aspirasi'));
    }

    public function editProfil(){
        $anggota = Anggota::with('user')->get();
        return view('user.profil', compact('anggota'));
    }

    public function updateProfil(Request $request, $id){

        $this->validate($request, [
            'nim' => 'required|max:9',
            'nama_anggota' => 'required|min:5',
            'program_studi' => 'required',
            'tanggal_lahir' => 'required',
            'angkatan' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'foto' => 'required',
        ]);

        $anggota = Anggota::find($id);
        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalExtension();

        $tujuan_upload = 'images/anggota';
        $file->move($tujuan_upload, $nama_file);

        $data = [
            'nim' => $request['nim'],
            'nama_anggota' => $request['nama_anggota'],
            'program_studi' => $request['program_studi'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'angkatan' => $request['angkatan'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'agama' => $request['agama'],
            'foto' => $nama_file,
            'user_id' => Auth::user()->id,
        ];

        $anggota->update($data);
        return redirect()->back();
    }

    public function showAspirasi(){
        $aspirasi = Aspirasi::with('user')->get();
        return view('user.aspirasi', compact('aspirasi'));
    }

    public function createAspirasi() {
        $aspirasi = Aspirasi::with('user')->get();
        return view ('user.create-aspirasi', compact('aspirasi'));
    }

    public function postAspirasi(Request $request){
        $this->validate( $request, [
            'tujuan_aspirasi' => 'required',
            'isi_aspirasi' => 'required',
        ]);

        Aspirasi::create([
            'tujuan_aspirasi' => $request->tujuan_aspirasi,
            'isi_aspirasi' => $request->isi_aspirasi,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('/anggota/aspirasi');
    }

    public function editAspirasi($id){
        $aspirasi = Aspirasi::find($id);
        return view('user.edit-aspirasi', compact('aspirasi'));
    }

    public function updateAspirasi(Request $request, $id){
        $this->validate( $request, [
            'tujuan_aspirasi' => 'required',
            'isi_aspirasi' => 'required',
        ]);

        $aspirasi = Aspirasi::find($id);
        $aspirasi->tujuan_aspirasi = $request->tujuan_aspirasi;
        $aspirasi->isi_aspirasi = $request->isi_aspirasi;
        $aspirasi->update();
        return redirect('/anggota/aspirasi');
    }

    public function deleteAspirasi($id){
        $aspirasi = Aspirasi::find($id);
        $aspirasi->delete();
        return redirect('/anggota/aspirasi');
    }

    public function resetPassword(){
        return view('user.reset-password');
    }

    public function ubahPassword(Request $request){
        $this->validate( $request,[
            'current_password' => 'required',
            'password' => 'required', 'Confirmed',
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('message', 'Kata sandi Anda telah diperbarui');
        }
        throw ValidationException::withMessages([
            'current_password' => 'Kata sandi Anda saat ini tidak cocok',   
        ]);
    }
}
