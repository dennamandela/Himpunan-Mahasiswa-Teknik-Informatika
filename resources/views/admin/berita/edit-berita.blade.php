<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Berita</title>

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
                                    <h3 class="card-title">Edit Berita</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('berita/update', $berita -> id )}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="judul_berita">Judul Berita</label>
                                            <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="{{ $berita -> judul_berita}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="isi_berita">Isi Berita</label>
                                            <input type="text" class="form-control" id="isi_berita" name="isi_berita" value="{{ $berita -> isi_berita}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_post">Tanggal Post</label>
                                            <input type="datetime-local" class="form-control" id="tanggal_post" name="tanggal_post">{{ $berita -> tanggal_post}}
                                        </div>
                                        <div class="form-group">
                                            <label for="foto" class="form-label"> Foto</label>
                                            <div class="input-group mb-3">
                                                <input type="file" name="foto_berita" class="form-control" id="inputGroupFile">
                                                <label for="inputGroupFile" class="input-group-text" >Upload</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <img width="150px" src="{{ url('/images/berita/'. $berita -> foto_berita) }}">
                                        </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ url('/writer/berita') }}" class="btn btn-warning">Cancel</a>
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