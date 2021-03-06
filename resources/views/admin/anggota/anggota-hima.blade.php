@extends('layout.anggota')

@section('content')

@if(session('message'))
<div class="card-body">
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Pesan!</h5>
        {{session('message')}}
    </div>
</div>
@endif
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ url('/admin/anggota/create') }}" role="button">Tambah Data Anggota</a>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Program Studi</th>
                                <th>Tanggal Lahir</th>
                                <th>Angkatan</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Foto</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($anggota as $a)
                            <tr>
                                <td> {{ $a->nim }}</td>
                                <td> {{ $a->nama_anggota }}</td>
                                <td> {{ $a->program_studi }}</td>
                                <td> {{ $a->tanggal_lahir }}</td>
                                <td> {{ $a->angkatan }}</td>
                                <td> {{ $a->jenis_kelamin }}</td>
                                <td> {{ $a->agama }}</td>
                                <td>
                                    <a href="{{ url('images/anggota/'. $a->foto) }}" target="_blank" rel="noopener noreferrer">Lihat Foto</a>
                                </td>
                                <td>
                                    <a href="{{ url ('admin/anggota/edit', $a -> id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url ('admin/anggota/hapus', $a -> id) }}" class="btn btn-danger">Hapus</a> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $anggota->links() }}
                    </ul>
                </div>    
            </div>
        </div>
    </div>
</section>

@endsection