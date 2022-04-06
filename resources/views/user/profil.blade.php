@extends('App.profil-user')

@section('content')

   
<div class="content mx-3">
    <div class="row">
        <div class="col-md-12">
                <div class="card card-user form-custom" style="border-radius: 2rem">
            <div class="card-header" style="border-radius: 2rem">
                <h5 class="card-title">Profil Mahasiswa</h5>
            </div>

            @foreach ($anggota as $a)
            @if ($a->user->id == Auth::user()->id)
            <div class="card-body">
            <form id="profile-student" action="{{url ('/anggota/profil', $a->id)}}"  method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <div class="photo-frame">
                                <img class="photo-profile" src="{{ url('images/anggota/'. $a->foto) }}" height="200" width="150">
                                <div class="upload-section btn btn-light btn-sm btn-block">
                                    Upload Photo
                                    <input type="file" name="foto" class="form-control" id="foto" accept=".jpeg,.jpg" value="{{$a->foto}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" name="nim" class="form-control" value="{{$a->nim}}">
                                <span class="text-danger" id="error-name"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama_anggota" class="form-control" value="{{$a->nama_anggota}}">
                                <span class="text-danger" id="error-name"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$a->user->email}}"readonly>
                                <input type="hidden" name="email" class="form-control" value="{{$a->user->email}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Program Studi</label>
                                <input type="text" name="program_studi" class="form-control" value="{{$a->program_studi}}">
                                <span class="text-danger" id="error-kota"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="{{$a->tanggal_lahir->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Angkatan</label>
                                <input type="text" name="angkatan" class="form-control" value="{{$a->angkatan}}">
                                <span class="text-danger" id="error-school"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>   
                                <input type="text" name="jenis_kelamin" class="form-control" value="{{$a->jenis_kelamin}}">
                                <span class="text-danger" id="error-kota"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Agama</label>
                                <input type="text" name="agama" class="form-control" value="{{$a->agama}}">
                                <span class="text-danger" id="error-kota"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        
                    </div>
                    <div class="col-md-8">
                        
                    </div>
                    <div class="col-md-8">
                        
                    </div>
                </div>
              </div>
                <div class="row">
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary btn-round text-white">Simpan</button>
                    </div>
                </div>
            </form>
            </div>
            @endif
            @endforeach
        </div>
        </div>
    </div>
    
            
    </div>
</div>
</div>

      </div>
    </div>
  </div>

@endsection