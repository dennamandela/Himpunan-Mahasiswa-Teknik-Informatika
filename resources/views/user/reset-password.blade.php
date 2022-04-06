@extends('App.reset')
@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-lg-9">
                                
            <div id="default">
                <div class="card mb-4">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">
                                            
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="{{url('/anggota/ubah-password')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1">Password Lama</label>
                                        <input class="form-control" type="password" id="current_password" name="current_password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1">Password Baru</label>
                                        <input class="form-control" type="password" id="password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1">Konfirmasi Password</label>
                                        <input class="form-control" type="password" id="password_confirmed" name="password_confirmed">
                                    </div>
                                    <br/>
                                    <div class="mb-0">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ url('/anggota/aspirasi')}}" class="btn btn-danger">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection