@extends('webapp.layouts.post-kegiatan')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Detail Kegiatan HIMATIF</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/kegiatan')}}" class="text-white">Kegiatan</a></li>
					<li class="breadcrumb-item active" aria-current="page">Detail Kegiatan</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="blog-details section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <article class="post">
          <div class="post-image">
            <img class="img-fluid w-100" src="{{ url('images/kegiatan/'. $kegiatan->foto) }}" alt="Foto">
          </div>
          <!-- Post Content -->
          <div class="post-content">
            <h3>{{$kegiatan->event->title}}</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Admin</a>&nbsp;/
              </li>
              <li class="list-inline-item">
                <a href="#">{{$kegiatan->created_at->diffForHumans()}}</a>
              </li>
            </ul>
            <p>{{$kegiatan -> keterangan}}</p>
            <!-- post share -->
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection