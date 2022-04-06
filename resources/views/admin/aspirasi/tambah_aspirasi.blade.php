<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Aspirasi</title>

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
                                    <h3 class="card-title">Tambah Aspirasi</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('/admin/aspirasi/post')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="judul">Tujuan Aspirasi</label>
                                            <input type="text" class="form-control" id="tujuan_aspirasi" name="tujuan_aspirasi" placeholder="Tujuan Aspirasi">
                                        </div>
                                        <div class="form-group">
                                            <label for="isi">Isi Aspirasi</label>
                                            <textarea class="form-control" rows="3" id="isi_aspirasi" name="isi_aspirasi" placeholder="Isi Aspirasi"></textarea>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ url('/admin/aspirasi') }}" class="btn btn-warning">Cancel</a>
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