@extends('layout.aspiration')

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
                    <a class="btn btn-primary btn-sm" href="{{ url('/admin/aspirasi/tambah') }}" role="button">Tambah Data Aspirasi</a>
                    
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
                                <th>Nama</th>
                                <th>Nama Instansi</th>
                                <th>Perihal</th>
                                <th>Sebagai</th>
                                <th>Isi</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($aspirasiMasyarakat as $am)
                            <tr>
                                <td> {{ $am->nama}}</td>
                                <td> {{ $am->nama_instansi}}</td>
                                <td> {{ $am->perihal}}</td>
                                <td> {{ $am->pilih}}</td>
                                <td> {{ $am->isi}}</td>
                                <td>
                                    <a href="{{ url ('/admin/aspirasi-masyarakat/hapus', $am -> id) }}" class="btn btn-danger">Hapus</a> 
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