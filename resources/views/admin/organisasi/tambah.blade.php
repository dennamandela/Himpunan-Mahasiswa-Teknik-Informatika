<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Struktur Organisasi</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ url('AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('AdminLTE-3.1.0/dist/css/adminlte.min.css')}}">
    </head>
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
                                    <h3 class="card-title">Tambah Struktur Organisasi</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('struktur.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nim">NIM</label>
                                            <input type="textl" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                        </div>
                                        @foreach($user as $u)
                                        @if($u->id == Auth::user()->id)
                                        <div class="form-group">
                                            <label for="jabatan">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{$u->email}}">
                                            <input type="hidden" class="form-control" id="email" name="email" value="{{$u->id}}">
                                        </div>
                                        @endif
                                        @endforeach
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan</label>
                                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
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
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                        <a href="{{ route('struktur.index') }}" class="btn btn-warning">Cancel</a>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>