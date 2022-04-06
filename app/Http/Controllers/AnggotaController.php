<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Support\Str;
use DB;


class AnggotaController extends Controller
{
    public function index(){
        $anggota = DB::table('anggota')->simplePaginate(8);
        return view('admin.anggota.anggota-hima', compact('anggota'));
    }

    public function create(){
        return view('admin.anggota.create-anggota');
    }

    public function post (Request $request) {
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

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalExtension();

        $tujuan_upload = 'images/anggota';
        $file->move($tujuan_upload, $nama_file);

        $user = new \App\Models\User;
        $user->role = 'anggota';
        $user->name = $request->nama_anggota;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $anggota = \App\Models\Anggota::create([
            'nim' => $request['nim'],
            'nama_anggota' => $request['nama_anggota'],
            'program_studi' => $request['program_studi'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'angkatan' => $request['angkatan'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'agama' => $request['agama'],
            'foto' => $nama_file,
            'user_id' => $user->id
        ]);

        return redirect('admin/anggota')->with('message', 'Data Berhasil Tersimpan');
    }

    public function edit($id) {
        $anggota = Anggota::find($id);
        return view ('admin.anggota.edit-anggota', compact('anggota'));
    }

    public function update(Request $request, $id) {
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
        ];

        $anggota->update($data);
        return redirect('/admin/anggota')->with('message', 'Data Berhasil Diupdate');
    }

    public function delete($id) {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('/admin/anggota')->with('message', 'Data Berhasil Dihapus');
    } 
}
