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
            'foto_berita' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal_post' => 'required',
        ]);

        //menyimpan data file yang di upload ke variabel $file
        $file = $request->file('foto_berita');

        $nama_file = time()."_".$file->getClientOriginalName();

        //isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'file';
        $file->move($tujuan_upload,$nama_file);

        Berita::create([
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'foto_berita' => $nama_file,
            'tanggal_post' => $request->tanggal_post
        ]);
        return redirect('/berita');
    }
}
