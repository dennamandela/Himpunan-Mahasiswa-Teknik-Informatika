@extends ('App.aspirasi')

@section('content')

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Aspirasi</h1>
                    <p class="mb-4">Silahkan berikan aspirasi Anda untuk HIMATIF dan Aspirasi ini akan kami tampung!</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ url('/anggota/aspirasi/create')}}" class="m-0 font-weight-bold text-primary">(+)Tambah Aspirasi</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tujuan Aspirasi</th>
                                            <th>Isi Aspirasi</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aspirasi as $a)
                                        @if($a->user->id == Auth::user()->id)
                                        <tr>
                                            <td>{{$a->tujuan_aspirasi}}</td>
                                            <td>{{$a->isi_aspirasi}}</td>
                                            <td>
                                                <a href="{{ url ('/anggota/aspirasi/edit', $a -> id) }}" class="btn btn-warning">Edit</a> |
                                                <a href="{{ url ('/anggota/aspirasi/delete', $a -> id) }}" class="btn btn-danger">Hapus</a> 
                                            </td>
                                            
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

@endsection