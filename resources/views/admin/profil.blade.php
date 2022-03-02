@extends('layout.profile')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @foreach ($struktur as $s)
                @if ($s->user->id == Auth::user()->id)
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                            src="{{ url('images/struktur/'. $s->foto) }}"
                            alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{$s->user->name}}</h3>

                        <p class="text-muted text-center">{{$s->jabatan}}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NIM</b> <a class="float-right">{{$s->nim}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nama</b> <a class="float-right">{{$s->nama}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Jabatan</b> <a class="float-right">{{$s->jabatan}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profil</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Lupa Password</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="{{ url('/profile/update', $s -> id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="inputNim" class="col-sm-2 col-form-label">NIM</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nim" class="form-control" id="nim" value="{{$s -> nim}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" id="nama" value="{{$s -> nama}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="email" value="{{$s->user -> email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="name" value="{{$s->user -> name}}">
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label for="inputJabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{$s -> jabatan}}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="foto" class="form-control" id="foto" value="{{$s->foto}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <img width="150px" src="{{ url('images/struktur/'. $s->foto) }}">
                                    </div>
                                
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="timeline">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">NIM</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection