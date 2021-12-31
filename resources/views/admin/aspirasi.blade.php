@extends('layout.app')

@section('content')
    <div class="user-dashboard">
        <h1>Aspirasi</h1>
        <a class="btn btn-primary" href="{{ url('aspirasi/tambah') }}" role="button">Tambah Data Aspirasi</a>
        <hr>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>Tujuan Aspirasi</td>
                    <td>Isi Aspirasi</td>
                    <td>OPSI</td>
                </tr>
                <thead>
                <tbody>
                @foreach ($aspirasi as $a)
                <tr>
                    <td> {{ $a->tujuan_aspirasi}}</td>
                    <td> {{ $a->isi_aspirasi}}</td>
                    <td>
                        <a href="{{ url ('aspirasi/edit', $a -> id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url ('aspirasi/hapus', $a -> id) }}" class="btn btn-danger">Hapus</a> 
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection