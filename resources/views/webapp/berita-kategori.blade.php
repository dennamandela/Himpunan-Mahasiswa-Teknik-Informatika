@extends('webapp.layouts.kategori')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Kategori Berita</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/')}}" class="text-white">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ url('/berita') }}" aria-current="page">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kategori Berita</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="posts section">
	<div class="container">
		<div class="row">
			
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ url('images/berita/'. $berita->foto_berita) }}" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3>{{$berita->judul_berita}}</h3>
						<p>{{$berita->headline}}</p>
						<a class="btn btn-main" href="{{ $berita->berita() }}">Selengkapnya</a>
					</div>
				</div>
			</article>
			
		</div>
	</div>
</section>
@endsection