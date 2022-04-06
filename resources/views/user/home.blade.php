@extends('App.index')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Selamat Datang, {{Auth::user()->name}}</h1>
    </div>

    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tujuan Aspirasi</th>
                                            <th>Isi Aspirasi</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aspirasi as $a)
                                        @if($a->user->id == Auth::user()->id)
                                        <tr>
                                            <td>{{$a->tujuan_aspirasi}}</td>
                                            <td>{{$a->isi_aspirasi}}</td>
                                            <td>
                                                <a href="{{ url ('/anggota/aspirasi/edit', $a -> id) }}" class="btn btn-warning">Edit</a> |
                                                <a href="{{ url ('/anggota/aspirasi/delete', $a -> id) }}" class="btn btn-danger">Hapus</a> 
                                            </td>
                                            
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        

</div>
@endsection