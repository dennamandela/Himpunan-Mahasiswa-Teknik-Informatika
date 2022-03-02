@extends('layout.aspirasi')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ url('aspirasi/tambah') }}" role="button">Tambah Data Aspirasi</a>
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
                                <th>No</th>
                                <th>Tujuan Aspirasi</th>
                                <th>Isi Aspirasi</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($aspirasi as $a)
                            <tr>
                            <td> {{ $a->id}}</td>
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
        </div>
    </div>
</section>

@endsection