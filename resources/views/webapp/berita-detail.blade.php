@extends('webapp.layouts.detail')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Detail Berita</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/berita')}}" class="text-white">Berita</a></li>
					<li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
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
          <div class="post-image mb-5">
            <img loading="lazy" class="img-fluid w-100" src="{{ url('images/berita/'. $berita->foto_berita) }}" alt="post-image">
          </div>
            <!-- Post Content -->
          <div class="post-content">
            <h3>{{ $berita->judul_berita}}</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Admin</a>&nbsp;/
              </li>
              <li class="list-inline-item">
                <a href="#">{{$berita->created_at->diffForHumans()}}</a>&nbsp;/
              </li>
              <li class="list-inline-item">
                <a href="#">{{$berita->kategori->nama_kategori}}</a>&nbsp;
              </li>
            </ul>
            <p>{{$berita->isi_berita}}</p>
            <!-- post share -->
            <ul class="post-content-share list-inline mb-5">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/himatif_stmik_jabar/">
                  <i class="tf-ion-social-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="malto:himatif@stmikjabar.ac.id">
                  <i class="tf-ion-email"></i>
                </a>
              </li>
            </ul>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection