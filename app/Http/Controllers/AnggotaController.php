<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index(){
        $anggota = Anggota::All();
        return view('admin.anggota.anggota-hima', compact('anggota'));
    }

    public function create(){
        return view('admin.anggota.create');
    }
}
