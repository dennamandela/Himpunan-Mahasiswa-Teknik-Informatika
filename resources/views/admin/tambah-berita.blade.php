<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Berita</title>

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
                                    <h3 class="card-title">Tambah Berita</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('/berita/store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="judul">Judul Berita</label>
                                            <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Masukkan Judul Berita">
                                        </div>
                                        <div class="form-group">
                                            <label for="isi">Isi Berita</label>
                                            <input type="text" class="form-control" id="isi_berita" name="isi_berita" placeholder="Masukkan Isi Berita">
                                        </div>
                                        <div class="form-group">
                                            <label for="foto_berita" class="form-label"> Foto</label>
                                            <div class="input-group mb-3">
                                                <input type="file" name="foto_berita" class="form-control" id="inputGroupFile">
                                                <label for="inputGroupFile" class="input-group-text">Upload</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal Post</label>
                                            <input type="datetime-local" class="form-control" id="tanggal_post" name="tanggal_post" placeholder="Masukkan Tanggal">
                                        </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ url('/berita') }}" class="btn btn-warning">Cancel</a>
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