<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index() {
        $kategori = Kategori::All();
        return view('admin.kategori.data-kategori', compact('kategori'));
    }

    public function tambah () {
        return view('admin.kategori.create-kategori');
    }

    public function prosesTambah(Request $request) {
        $this->validate( $request, [
            'nama_kategori' => 'required'
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect('/writer/kategori')->with('message', 'Data Berhasil Disimpan');
    }

    public function editKategori($id) {
        $kategori = Kategori::find($id);
        return view('admin.kategori.edit-kategori', compact('kategori'));
    }

    public function updateKategori(Request $request, $id) {
        $this->validate( $request, [
            'nama_kategori' => 'required'
        ]);

        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();
        return redirect('/writer/kategori')->with('message', 'Data Berhasil Diupdate');
    }

    public function hapusKategori($id) {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/writer/kategori')->with('message', 'Data Berhasil Dihapus');
    }
}
