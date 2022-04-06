<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Agenda;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::All();
        return view('admin.kegiatan.highlight', ['kegiatan' => $kegiatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agenda = Agenda::All();
        return view('admin.kegiatan.create', ['agenda' => $agenda]);
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
            'keterangan' => 'required',
            'tempat' => 'required',
            'foto' => 'required',

        ]);

        $file = $request->file('foto');
 
		$nama_file = time()."_".$file->getClientOriginalExtension();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'images/kegiatan';
		$file->move($tujuan_upload,$nama_file);
 
		Kegiatan::create([
            'keterangan' => $request->keterangan,
            'tempat' => $request->tempat,
			'foto' => $nama_file,
            'event_id' => $request->event_id,
            'title' => $request->title,
            'start' => $request->start,
		]);
 
		return redirect('/highlight')->with('message', 'Data Berhasil Disimpan');
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
        $agenda = Agenda::All();
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.edit',compact('kegiatan', 'agenda'));
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
        

        $kegiatan = Kegiatan::find($id);
        $file = $kegiatan->foto;

        $data = [
            'keterangan' => $request['keterangan'],
            'tempat' => $request['tempat'],
            'foto' => $file,
            'event_id' => $request['event_id'],
        ];
        
        $request->foto->move(public_path().'/images/kegiatan', $file);
        $kegiatan->update($data);
        return redirect('/highlight')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/highlight')->with('message', 'Data Berhasil Dihapus');
    }
}
