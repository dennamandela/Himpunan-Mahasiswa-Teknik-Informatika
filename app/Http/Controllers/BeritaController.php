<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index(){
        
        $berita = Berita::get();
	    return view('admin.data-berita', ['berita' => $berita]);
    }

    public function tambah(){
        return view('admin.tambah-berita');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'foto_berita' => 'required',
            'tanggal_post' => 'required'
        ]);

        $file = $request->file('foto_berita');
        $nama_file = time()."_".$file->getClientOriginalExtension();

        $tujuan_upload = 'images/berita';
        $file->move($tujuan_upload, $nama_file);

        Berita::create([
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'foto_berita' => $nama_file,
            'tanggal_post' => $request->tanggal_post
        ]);
        return redirect('/berita');
    }

    public function edit($id){
        $berita = Berita::find($id);
        return view ('admin.edit-berita', ['berita' => $berita]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'foto_berita' => 'required',
            'tanggal_post' => 'required'
        ]);

        $berita = Berita::find($id);
        $file = $berita->foto_berita;

        $data = [
            'judul_berita' => $request['judul_berita'],
            'isi_berita' => $request['isi_berita'],
            'foto_berita' => $file,
            'tanggal_post' => $request['tanggal_post'],
        ];

        $request->foto_berita->move(public_path().'/images/berita', $file);
        $berita->save($data);
        return redirect('/berita');
    }

    public function hapus($id){
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->back();
    }
}
