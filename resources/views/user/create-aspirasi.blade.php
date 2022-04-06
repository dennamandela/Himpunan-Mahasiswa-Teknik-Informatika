@extends('App.aspirasi')
@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-lg-9">
                                
            <div id="default">
                <div class="card mb-4">
                    <div class="card-header">Beri aspirasi Anda kepada kami!</div>
                    <div class="card-body">
                                            
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="{{ url('/anggota/aspirasi/post')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @foreach($aspirasi as $a)
                                    @if($a->user->id == Auth::user()->id)
                                        <input class="form-control" id="user_id" name="user_id" type="hidden" value="{{$a->user->name}}">
                                    @endif
                                    @endforeach
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1">Kategori Aspirasi</label>
                                        <select class="form-control" id="tujuan_aspirasi" name="tujuan_aspirasi">
                                            <option>--- Pilih Aspirasi Anda ---</option>
                                            <option>Fasilitas</option>
                                            <option>Beasiswa</option>
                                            <option>Akademik</option>
                                            <option>Kepengurusan Himatif</option>
                                            <option>Lainnya</option>     
                                        </select>
                                    </div>
                                    <div class="mb-0">
                                        <label for="exampleFormControlTextarea1">Isi Aspirasi</label>
                                        <textarea class="form-control" id="isi_aspirasi" name="isi_aspirasi" rows="3"></textarea>
                                    </div>
                                    <br/>
                                    <div class="mb-0">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
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