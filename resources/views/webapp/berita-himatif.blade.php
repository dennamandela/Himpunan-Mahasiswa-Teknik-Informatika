@extends('webapp.layouts.berita')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Berita</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/')}}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Berita</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="posts section">
	<div class="container">
		<div class="row">
			@foreach($berita as $b)
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="{{ url('images/berita/'. $b->foto_berita) }}" alt="Foto Berita" class="img-fluid">
					</div>

					<div class="content">
						<ul class="list-inline mb-3">
							<!-- post date -->
							<li class="list-inline-item mr-3 ml-0">{{$b->created_at->diffForHumans()}}</li>
							<!-- author -->
							<li class="list-inline-item mr-3 ml-0">By Admin IF</li>
						</ul>
						<h3><a href="{{ $b->berita() }}">{{$b->judul_berita}}</a></h3>
						<p>{{ $b->headline }}</p>
						<a class="btn btn-main" href="{{ $b->berita() }}">Selengkapnya</a>
					</div>
				</div>
			</article>
			@endforeach
		</div>
		{{ $berita->links() }}
	</div>
</section>


@endsection