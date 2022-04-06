@extends('layout.galeri-hima')

@section('content')

            @if(session('pesan'))
            <div class="card-body">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Pesan!</h5>
                    {{session('pesan')}}
                </div>
            </div>
            @endif
       
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ url('/admin/galeri/create') }}" role="button">Tambah Data Galeri</a>
                    
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
                                <th>Nama Kegiatan</th>
                                <th>Link Drive</th>
                                <th>Foto</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($galeri as $g)
                            <tr>
                                <td> {{ $g->nama_kegiatan}}</td>
                                <td> {{ $g->link_drive}}</td>
                                <td> 
                                    <a href="{{ url('images/galeri/'. $g->image) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                                </td>
                                <td>
                                    <a href="{{ url ('/admin/galeri/edit', $g -> id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url ('/admin/galeri/hapus', $g -> id) }}" class="btn btn-danger">Hapus</a> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                 
            </div>
        </div>
    </div>
</section>

@endsection