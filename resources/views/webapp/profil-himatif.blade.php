@extends('webapp.layouts.profil')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Profil</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url ('/')}}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Profil</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
				<h2>Sejarah HIMATIF</h2>
				<p>HIMATIF (Himpunan Mahasiswa Teknik Informatika) didirikan pada tanggal 13 Desember 2020 bertempat dijalan Jl. Soekarno-Hatta No.777 Lantai 4 Ruang 1 STMIK JABAR.</p>
				<p>HIMATIF adalah organisasi yang beriman dan bertakwa dalam bentuk himpunan minat dan bakat, keilmuan, serta sosial dan budaya Mahasiswa Program Studi Teknik Informatika STMIK JABAR.</p>
				<p>HIMATIF dengan semangat kerjasama dan kekeluargaan berusaha mengembangkan potensi mahasiswa yang beriman dan bertakwa dalam bidang minat dan bakat, keilmuan, serta sosial dan budaya, yang sesuai dengan Tri Dharma Perguruan Tinggi.</p>
			</div>
			<div class="col-md-6">
				<img class="img-fluid" src="{{ url ('template/images/himatif-sj.png') }}" alt="Himatif">
			</div>
		</div>
	</div>
</section>

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Visi</h3>
				<p>Menjadikan Himpunan Mahasiswa Teknik Informatika sebagai wadah berkreasi, berinovasi dan berprestasi di bidang teknologi informasi dengan berlandaskan kecintaaan kepada Tuhan YME dan Tri Dharma Perguruan Tinggi.</p>
				<img src="images/company/company-image-2.jpg" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6">
				<h3>Misi</h3>
				<p>1. Mampu meningkatkan solidaritas dan kebersamaan antara pengurus dengan anggota</p>
				<p>2. Mengajak Mahasiswa Teknik Informatika untuk ikut aktif dalam setiap kegiatan.</p>
				<p>3. Mampu meningkatkan kualitas dan pribadi mahasiswa yang lebih unggul di bidang akademik maupun non akademik.</p>
				<p>4. Mengoptimalkan HIMA sebagai wadah untuk menampung aspirasi mahasiswa jurusan Teknik Informatika.</p>
				<p>5. Menumbuhkan rasa keimanan dan ketakwaan kepada Tuhan Yang Maha Esa.</p>

				<img src="images/company/company-image-3.jpg" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>

<section class="promo-video section-sm">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Struktur Organisasi</h2>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
			<div class="col-md-8 mx-auto">
				
			</div>
		</div>
	</div>
</section>

<section class="posts section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2>Pengurus Inti</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($struktur as $s)
			<article class="col-lg-6 col-md-8">
				<div class="post-item text-center">
					<div class="media-wrapper">
						<img loading="lazy" src="{{ url('images/struktur/'. $s->foto) }}" alt="Foto" class="img-fluid">
					</div>

					<div class="member-content">
						<h3>{{$s->nama}}</h3>
						<span>{{$s->jabatan}}</span>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	</div>
</section>




@endsection