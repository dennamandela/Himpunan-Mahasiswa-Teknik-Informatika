@extends('App.profil-user')

@section('content')

   
<div class="content mx-3">
    <div class="row">
        <div class="col-md-12">
                <div class="card card-user form-custom" style="border-radius: 2rem">
            <div class="card-header" style="border-radius: 2rem">
                <h5 class="card-title">Profil Siswa</h5>
            </div>

            @foreach ($anggota as $a)
            @if ($a->user->id == Auth::user()->id)
            <div class="card-body">
            <form id="profile-student" action="{{url ('/anggota/profil/', $a->id)}}"  method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <div class="photo-frame">
                                <img class="photo-profile" src="" height="200" width="150">
                                <div class="upload-section btn btn-light btn-sm btn-block">
                                    Upload Photo
                                    <input type="file" name="file_photo" class="" id="file_photo" accept=".jpeg,.jpg">
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
                                <input type="text" name="name" class="form-control" value="{{$a->nim}}">
                                <span class="text-danger" id="error-name"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control" value="{{$a->nama_anggota}}">
                                <span class="text-danger" id="error-name"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" value="{{$a->user->email}}"readonly>
                                <input type="hidden" name="email" class="form-control" value="{{$a->user->email}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Program Studi</label>
                                <select name="kota" class="form-control " id="kota">   
                                    <option value="">-- Pilih Program Studi --</option>
                                    <option value="TI" >Teknik Informatika</option>    
                                    <option value="SI" >Sistem Informasi</option>     
                                </select>
                                <span class="text-danger" id="error-kota"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" name="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Angkatan</label>
                                <input type="text" name="school" class="form-control" value="{{$a->angkatan}}">
                                <span class="text-danger" id="error-school"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control " id="jenis_kelamin">   
                                    <option value="{{$a->jenis_kelamin}}">-- Pilih Jenis Kelamin --</option>
                                    <option value="TI" >Laki-Laki</option>    
                                    <option value="SI" >Perempuan</option>     
                                </select>
                                <span class="text-danger" id="error-kota"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama" class="form-control " id="agama">   
                                    <option value="{{}}">-- Pilih Agama --</option>
                                    <option value="islam" >Islam</option>    
                                    <option value="kristen" >Kristen</option>
                                    <option value="hindu" >Hindu</option>    
                                    <option value="budha" >Budha</option>
                                    <option value="konghucu" >Konghucu</option>       
                                </select>
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