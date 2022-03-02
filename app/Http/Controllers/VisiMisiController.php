<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visi_misi = VisiMisi::all();
        return view ('admin.visi.data-visimisi', ['visi_misi' => $visi_misi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.visi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'type' => 'required',
            'isi' => 'required'
        ]);

        VisiMisi::create([
            'type' => $request->type,
            'isi' => $request->isi
        ]);
        return redirect('/visimisi');
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
        $visi_misi = VisiMisi::find($id);
        return view ('admin.visi.edit', ['visi_misi' => $visi_misi]);
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
            'type' => 'required',
            'isi' => 'required'
        ]);

        $visi_misi = VisiMisi::find($id);
        $visi_misi->type = $request->type;
        $visi_misi->isi = $request->isi;
        $visi_misi->update();
        return redirect('/visimisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visi_misi = VisiMisi::find($id);
        $visi_misi->delete();
        return redirect('/visimisi');
    }
}
