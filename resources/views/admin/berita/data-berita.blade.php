@extends('layout.berita')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ url('/writer/berita/create') }}" role="button">Tambah Data Berita</a>
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
                                <th>Kategori</th>
                                <th>Judul Berita</th>
                                <th>Headline</th>
                                <th>Isi Berita</th>
                                <th>Foto</th>
                                <th>Tanggal Post</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $b)
                            <tr>
                                <td> {{$b->kategori->nama_kategori}}</td>
                                <td> {{ $b->judul_berita}}</td>
                                <td> {{ $b->headline}}</td>
                                <td> {{ $b->isi_berita}}</td>
                                <td> 
                                    <a href="{{ url('images/berita/'. $b->foto_berita) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                                </td>
                                <td> {{ $b->tanggal_post}}</td>
                                <td>
                                    <a href="{{ url ('/writer/berita/edit', $b -> id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url ('/writer/berita/hapus', $b -> id) }}" class="btn btn-danger">Hapus</a> 
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