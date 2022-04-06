<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;

class BeritaController extends Controller
{
    public function index(){
        
        $berita = Berita::get();
	    return view('admin.berita.data-berita', ['berita' => $berita]);
    }

    public function tambah(){
        $kategori = Kategori::all();
        return view('admin.berita.tambah-berita', compact('kategori'));
    }

    public function store(Request $request) {

        $this->validate($request, [
            'judul_berita' => 'required',
            'headline' => 'required',
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
            'headline' => $request->headline,
            'isi_berita' => $request->isi_berita,
            'foto_berita' => $nama_file,
            'tanggal_post' => $request->tanggal_post,
            'kategori_id' => $request->kategori_id,
        ]);
        return redirect('/writer/berita')->with('message', 'Data Berhasil Disimpan');
    }

    public function edit($id){
        $berita = Berita::find($id);
        return view ('admin.berita.edit-berita', ['berita' => $berita]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'judul_berita' => 'required',
            'headline' => 'required',
            'isi_berita' => 'required',
            'foto_berita' => 'required',
            'tanggal_post' => 'required'

        ]);

        $berita = Berita::find($id);
        $file = $berita->foto_berita;

        $data = [
            'judul_berita' => $request['judul_berita'],
            'headline' => $request['headline'],
            'isi_berita' => $request['isi_berita'],
            'foto_berita' => $file,
            'tanggal_post' => $request['tanggal_post'],
            'kategori_id' => $$request['kategori_id'],
        ];

        $request->foto_berita->move(public_path().'/images/berita', $file);
        $berita->save($data);
        return redirect('/writer/berita')->with('message', 'Data Berhasil Diupdate');
    }

    public function hapus($id){
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
    }
}
