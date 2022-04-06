@extends('layout.struktur')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ route('struktur.create') }}" role="button">Tambah Data Struktur</a>
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
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($struktur as $s)
                            <tr>
                                <td> {{ $s->nim }}</td>
                                <td> {{ $s->nama }}</td>
                                <td> {{ $s->jabatan }}</td>
                                <td>
                                <a href="{{ url('images/struktur/'. $s->foto) }}" target="_blank" rel="noopener noreferrer">Lihat Foto</a>
                                </td>
                                <td><a href="{{ route ('struktur.edit', $s -> id) }}" class="btn btn-warning">Edit</a> |
                                    <form action="{{ route ('struktur.destroy', $s -> id) }}" method="POST">
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