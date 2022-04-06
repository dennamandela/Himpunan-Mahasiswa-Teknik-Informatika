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
}
