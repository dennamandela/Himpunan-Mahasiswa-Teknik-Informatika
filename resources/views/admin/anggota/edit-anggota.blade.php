@extends('layout.anggota')

@section('content')

<body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Anggota</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('/admin/anggota/update', $anggota->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nim">Nim</label>
                                            <input type="text" class="form-control" id="nim" name="nim" value="{{$anggota->nim}}" placeholder="Masukkan Nim...">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Anggota</label>
                                            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="{{$anggota->nama_anggota}}" placeholder="Masukkan Nama...">
                                        </div>
                                        <div class="form-group">
                                            <label for="prodi">Program Studi</label>
                                            <input type="text" class="form-control" id="program_studi" name="program_studi" value="{{$anggota->program_studi}}" placeholder="Masukkan Prodi...">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$anggota->tanggal_lahir->format('Y-m-d') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="angkatan">Angkatan</label>
                                            <input type="text" class="form-control" id="angkatan" name="angkatan" value="{{$anggota->angkatan}}" placeholder="Masukkan Angkatan...">
                                        </div>
                                        <div class="form-group">
                                            <label for="jk">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$anggota->jenis_kelamin}}" placeholder="Masukkan Angkatan...">
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" id="agama" name="agama" value="{{$anggota->agama}}" placeholder="Masukkan Agama...">
                                        </div>
                                        <div class="form-group">
                                            <label for="foto" class="form-label"> Foto</label>
                                            <div class="input-group mb-3">
                                                <input type="file" name="foto" class="form-control" id="inputGroupFile" value="{{$anggota->foto}}">
                                                <label for="inputGroupFile" class="input-group-text">Upload</label>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ url('/admin/anggota') }}" class="btn btn-warning">Cancel</a>
                                        </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>

@endsection