@extends('layout.visimisi')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary btn-sm" href="{{ route('visimisi.create')}}" role="button">Tambah Visi Misi</a>
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
                                <th>Type</th>
                                <th>Isi</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($visi_misi as $vm)
                            <tr>
                                <td> {{ $vm->type}}</td>
                                <td>{{ $vm->isi}}</td>
                                <td>
                                    <ul class="navbar-nav">
                                        <a href="{{ route('visimisi.edit', $vm -> id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route ('visimisi.destroy', $vm -> id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </ul>   
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