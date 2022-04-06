<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\User;
use App\Models\AspirasiMasyarakat;

class AspirasiController extends Controller
{
    public function index(){
        $aspirasi = Aspirasi::all();
        return view('admin.aspirasi.aspirasi', ['aspirasi' => $aspirasi]);
    }
    
    public function tambah () {
        return view('admin.aspirasi.tambah_aspirasi');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'tujuan_aspirasi' => 'required',
            'isi_aspirasi' => 'required',
        ]);
        
        Aspirasi::create([
            'tujuan_aspirasi' => $request->tujuan_aspirasi,
            'isi_aspirasi' => $request->isi_aspirasi,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('/aspirasi')->with(['message' => 'Data Berhasil Disimpan!!']);
    }

    public function edit($id){
        $aspirasi = Aspirasi::find($id);
        return view('admin.aspirasi.edit-aspirasi', ['aspirasi' => $aspirasi]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'tujuan_aspirasi' => 'required',
            'isi_aspirasi' => 'required'
        ]);

        $aspirasi = Aspirasi::find($id);
        $aspirasi->tujuan_aspirasi = $request->tujuan_aspirasi;
        $aspirasi->isi_aspirasi = $request->isi_aspirasi;
        $aspirasi->save();
        return redirect('admin/aspirasi')->with(['message' => 'Data Berhasil Diupdate!!']);
    }

    public function hapus($id){
        $aspirasi = Aspirasi::find($id);

        if($aspirasi != null) {
            $aspirasi->delete();
            return redirect()->back()->with(['message' => 'Data Berhasil Dihapus!!']);
        }

        return redirect()->back()->with(['message' => 'Salah ID!!']);
    }

    public function aspirasiMasyarakat() {
        $aspirasiMasyarakat = AspirasiMasyarakat::all();
        return view('admin.aspirasi.aspirasi-masyarakat', compact('aspirasiMasyarakat'));
    }

    public function delete ($id) {
        $aspirasiMasyarakat = AspirasiMasyarakat::find($id);
        $aspirasiMasyarakat->delete();
        return redirect()->back()->with(['pesan' => 'Data Berhasil Dihapus!!!']);
    }
}
