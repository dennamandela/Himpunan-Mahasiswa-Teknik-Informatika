<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Struktur;
use DB;
use App\Models\Kegiatan;
use App\Models\Agenda;
use App\Models\Galeri;
use App\Models\AspirasiMasyarakat;

class WebAppController extends Controller
{
    public function home() {
        $berita = Berita::orderBy('created_at', 'desc')->simplePaginate(6);
        return view('webapp.home', compact('berita'));
    }

    public function profile() {
        $struktur = Struktur::all();
        return view('webapp.profil-himatif', compact('struktur'));
    }

    public function aspiration() {
        $aspirasiMasyarakat = AspirasiMasyarakat::all();
        return view('webapp.aspirasi-himatif', compact('aspirasiMasyarakat'));
    }

    public function createAspirasi(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'nama_instansi' => 'required',
            'perihal' => 'required',
            'pilih' => 'required',
            'isi' => 'required',
        ]);

        AspirasiMasyarakat::create([
            'nama' => $request->nama,
            'nama_instansi' => $request->nama_instansi,
            'perihal' => $request->perihal,
            'pilih' => $request->pilih,
            'isi' => $request->isi,
        ]);

        return redirect()->back();
    }

    public function berita() {
        $berita = Berita::orderBy('created_at', 'desc')->simplePaginate(6);
        $kategori = Kategori::all();
        return view('webapp.berita-himatif', compact('berita','kategori'));
    }

    public function showDetail($id) {
        $berita = Berita::where('id', $id)->first();
        return view('webapp.berita-detail', compact('berita'));
    }

    public function kegiatan() {
        $kegiatan = Kegiatan::orderBy('created_at', 'desc')->simplePaginate(10);
        return view('webapp.kegiatan-himatif', compact('kegiatan'));
    }

    public function detailKegiatan($id) {
        $kegiatan = Kegiatan::where('id', $id)->first();
        return view('webapp.detail-kegiatan', compact('kegiatan'));
    }

    public function album () {
        $galeri = Galeri::orderBy('created_at', 'desc')->get();
        return view('webapp.galeri', compact('galeri'));
    }

    public function agenda(Request $request) {
        if ($request->ajax()){
            $data = Agenda::whereDate('start', '>=', $request->start)
                    ->whereDate('end', '<=', $request->end)
                    ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('webapp.agenda-himatif');
    }
}
