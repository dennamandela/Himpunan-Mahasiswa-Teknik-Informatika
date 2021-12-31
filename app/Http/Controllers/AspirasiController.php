<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    public function index(){
        $aspirasi = Aspirasi::all();
        return view('admin.aspirasi', ['aspirasi' => $aspirasi]);
    }
    
    public function tambah () {
        return view('admin.tambah_aspirasi');
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
        ]);
        return redirect('/aspirasi');
    }

    public function edit($id){
        $aspirasi = Aspirasi::find($id);
        return view('admin.edit-aspirasi', ['aspirasi' => $aspirasi]);
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
        return redirect('/aspirasi');
    }

    public function hapus($id){
        $aspirasi = Aspirasi::find($id);
        $aspirasi->delete();
        return redirect()->back();
    }
}
