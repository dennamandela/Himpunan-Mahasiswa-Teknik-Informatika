<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index () {
        $galeri = Galeri::all();
        return view('admin.galeri.galeri-himatif',compact('galeri'));
    }

    public function create () {
        return view ('admin.galeri.create-galeri');
    }

    public function post (Request $request) {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'link_drive' => 'required',
            'image' => 'required',
        ]);

        $file = $request->file('image');
 
		$nama_file = time()."_".$file->getClientOriginalExtension();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'images/galeri';
		$file->move($tujuan_upload,$nama_file);
 
		Galeri::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'link_drive' => $request->link_drive,
			'image' => $nama_file,
		]);
 
		return redirect('/admin/galeri')->with('message', 'Data Berhasil Disimpan');
    }

    public function edit ($id) {
        $galeri = Galeri::find($id);
        return view ('admin.galeri.edit-galeri', compact('galeri'));
    }

    public function update (Request $request, $id){
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'link_drive' => 'required',
            'image' => 'required',
        ]);

        $galeri = Galeri::find($id);
        $file = $galeri->image;

        $data = [
            'nama_kegiatan' => $request['nama_kegiatan'],
            'link_drive' => $request['link_drive'],
            'image' => $file,
        ];

        $request->image->move(public_path().'/images/galeri', $file);
        $galeri->save($data);
        return redirect('/admin/galeri')->with('message', 'Data Berhasil Diupdate');
    }

    public function destroy ($id) {
        $galeri = Galeri::find($id);
        $galeri->delete();
		return redirect('/admin/galeri')->with('message', 'Data Berhasil Dihapus');
    }
}
