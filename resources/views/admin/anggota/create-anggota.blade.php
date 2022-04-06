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
                                    <h3 class="card-title">Tambah Anggota</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('/admin/anggota/post')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nim">Nim</label>
                                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim...">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Anggota</label>
                                            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Masukkan Nama...">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email...">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password...">
                                        </div>
                                        <div class="form-group">
                                            <label for="prodi">Program Studi</label>
                                            <input type="text" class="form-control" id="program_studi" name="program_studi" placeholder="Masukkan Prodi...">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="angkatan">Angkatan</label>
                                            <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukkan Angkatan...">
                                        </div>
                                        <div class="form-group">
                                            <label for="jk">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                <option>--- Pilih Jenis Kelamin --- </option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama...">
                                        </div>
                                        <div class="form-group">
                                            <label for="foto" class="form-label"> Foto</label>
                                            <div class="input-group mb-3">
                                                <input type="file" name="foto" class="form-control" id="inputGroupFile">
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