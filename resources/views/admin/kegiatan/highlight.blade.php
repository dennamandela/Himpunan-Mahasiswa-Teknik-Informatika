@extends('layout.kegiatan')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ route ('highlight.create')}}" role="button">Tambah Highlight Kegiatan</a>
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
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Tempat</th>
                                <th>Foto</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($kegiatan as $k)
                            <tr>
                                <td> {{ $k->event->title }}</td>
                                <td> {{ $k->event->start }}</td>
                                <td> {{ $k->keterangan }}</td>
                                <td> {{ $k->tempat}}</td>
                                <td>
                                <a href="{{ url('images/kegiatan/'. $k->foto) }}" target="_blank" rel="noopener noreferrer">Lihat Foto</a>
                                </td>
                                <td><a href="{{ route ('highlight.edit', $k -> id) }}" class="btn btn-warning">Edit</a>|
                                    <form action="{{ route ('highlight.destroy', $k -> id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>  
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