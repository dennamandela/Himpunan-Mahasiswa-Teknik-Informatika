<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Highlight Kegiatan</title>

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
                                    <h3 class="card-title">Tambah Highlight</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('highlight.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="start">Nama Kegiatan</label>
                                            <select class="form-control" name="event_id" id="event_id">
                                                <option disabled value>Pilih Kegiatan</option>
                                                @foreach ($agenda as $a)
                                                <option value="{{$a->id }}">{{ $a->title}}</option>
                                                @endforeach
                                            </select>    
                                        </div>
                                        <div class="form-group">
                                            <label for="start">Tanggal</label>
                                            <select class="form-control" name="event_id" id="event_id">
                                                <option disabled value>Pilih Tanggal</option>
                                                @foreach ($agenda as $a)
                                                <option value="{{$a->id }}" name="start">{{ $a->start}}</option>
                                                @endforeach
                                            </select>    
                                        </div>
                                        <div class="form-group">
                                            <label for="Keterangan">Keterangan</label>
                                            <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat">Tempat Kegiatan</label>
                                            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Kegiatan">
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
                                        <a href="{{ route('highlight.index') }}" class="btn btn-warning">Cancel</a>
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