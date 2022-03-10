<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;
use App\Models\User;
use Auth;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = Struktur::all();
        return view('admin.organisasi.strukturorganisasi', ['struktur'=> $struktur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::All();
        return view ('admin.organisasi.tambah', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required'
        ]);

        $file = $request->file('foto');
 
		$nama_file = time()."_".$file->getClientOriginalExtension();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'images/struktur';
		$file->move($tujuan_upload,$nama_file);
 
		Struktur::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
			'foto' => $nama_file,
            'user_id' => Auth::user()->id,
		]);
 
		return redirect('/struktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $struktur = Struktur::find($id);
        return view ('admin.organisasi.edit', ['struktur' => $struktur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [ 
            'nim' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required',
        ]);
 
		$struktur = Struktur::find($id);
        $file = $struktur->foto;

        $data = [
            'nim' => $request['nim'],
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'foto' => $file,
        ];

        $request->foto->move(public_path().'/images/struktur', $file);
        $struktur->update($data);
        return redirect('/struktur');
    }
		

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $struktur = Struktur::find($id);
        $struktur->delete();

        return redirect('/struktur');
    }
}
