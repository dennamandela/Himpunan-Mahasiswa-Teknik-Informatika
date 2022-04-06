@extends('webapp.layouts.album')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Galeri HIMATIF</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url ('/')}}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Galeri</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="portfolio section-sm" id="portfolio">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<!-- section title -->
				<div class="title text-center">
					<h2>Galeri</h2>
					<p>Berikut ini adalah foto-foto kegiatan yang dilakukan oleh Himpunan Mahasiswa Teknik Informatika (HIMATIF) STMIK Jabar.</p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						<div class="filtr-container">
							@foreach($galeri as $g)
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix">
								<div class="portfolio-block">
									<img class="img-fluid" src="{{ url('/images/galeri'. $g->image) }}" alt="">
									<div class="caption">
										<h4><a href="{{$g->link_drive}}">{{$g->nama_kegiatan}}</a></h4>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->

@endsection