@extends('layout.app')

@section('content')
    <div class="user-dashboard">
        <h1>Berita</h1>
        <a class="btn btn-primary" href="{{url('/berita/create')}}" role="button">Tambah Data Berita</a>
        <hr>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Judul Berita</td>
                        <td>Isi Berita</td>
                        <td>Foto Berita</td>
                        <td>Tanggal Berita</td>
                        <td>OPSI</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $b)
                    <tr>
                        <td> {{ $b->judul_berita}}</td>
                        <td> {{ $b->isi_berita}}</td>
                        <td> <img width="150px" src="{{ url('/file/'.$b->foto_berita) }}"></img></td>
                        <td> {{ $b->tanggal_post}}</td>
                        <td>
                            <a href="/berita/edit/{{ $b -> Kode_berita}}" class="btn btn-warning">Edit</a>
                            <a href="/berita/hapus/{{ $b -> Kode_berita}}" class="btn btn-danger">Hapus</a> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection