@extends('layout.kategori')

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
                    <a class="btn btn-primary btn-sm" href="{{ url('/writer/kategori/tambah-data') }}" role="button">Tambah Data Kategori</a>
                    
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
                                <th>Nama Kategori</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($kategori as $k)
                            <tr>
                            <td> {{ $k->nama_kategori}}</td>
                                <td>
                                    <a href="{{ url ('/writer/kategori/edit-kategori', $k -> id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url ('/writer/kategori/hapus-kategori', $k -> id) }}" class="btn btn-danger">Hapus</a> 
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