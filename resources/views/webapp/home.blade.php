@extends ('webapp.layouts.index')

@section('content')

<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(template/images/himatifsj.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">HIMPUNAN MAHASISWA<br>
                        TEKNIK INFORMATIKA </h1>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"> Himpunan Mahasiswa Teknik Informatika (HIMATIF) STMIK Jabar<br> didirikan pada tanggal 13 Desember
						2020</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Jumlah Anggota</h2>
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-person-outline"></i>
							<div>
							    <span class="counter" data-count="25">25</span>
							</div>
							<h3>Angkatan 2019</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-person-outline"></i>
							<div>
							    <span class="counter" data-count="22">22</span>
							</div>
							<h3>Angkatan 2020</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-person-outline"></i>
							<div>
							    <span class="counter" data-count="15">15</span>
							</div>
				            <h3>Angkatan 2021</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-people-outline"></i>
							<div>
							    <span class="counter" data-count="62">62</span>
							</div>
							<h3>Total</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
        <section class="about-2 section" id="about">
        <div class="container">
		<div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="{{ url ('template/images/himatif-sj.png') }}" alt="">
			</div>
			<div class="col-lg-6 mt-20">
            <h2 class="mb-3">Tentang Kami</h2>
                <p>
                    HIMATIF (Himpunan Mahasiswa Teknik Informatika) STMIK JABAR didirikan pada tanggal 13 Desember 2020 di STMIK JABAR sampai waktu yang tidak ditentukan.</p>
                </p>
				<p>HIMATIF adalah organisasi yang beriman dan bertakwa dalam bentuk himpunan minat dan bakat, keilmuan,
                    serta sosial dan budaya Mahasiswa Program Studi Teknik Informatika STMIK JABAR.
                </p>
                <p>HIMATIF dengan semangat kerjasama dan kekeluargaan berusaha mengembangkan potensi mahasiswa yang beriman
                    dan bertakwa dalam bidang minat dan bakat, keilmuan, serta sosial dan budaya, yang sesuai dengan Tri Dharma Kampus.
                </p>
                <a href="{{ url ('/profil') }}" class="btn btn-main mt-20">Selengkapnya</a>
			</div>
		</div>
	</div>
</section> 

<section class="services" id="services">
	<div class="container">
		<div class="row no-gutters">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Divisi HIMATIF</h2>
					<p>Berikut ini adalah divisi/departemen dari Himpunan Mahasiswa Teknik Informatika (HIMATIF) STMIK Jabar</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 color-bg text-center">
					<div class="service-icon text-center">
						<img loading="lazy" class="img-fluid" src="{{ url ('template/images/humas.png')}}" alt="Humas">
					</div>
					<h3>HUMAS</h3>
					<p>Menjembatani dan menjalin hubungan atau kerja sama antara Pengurus dengan Anggota, Lembaga, dan Organisasi Kemahasiswaan lain baik di dalam maupun di luar kampus.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 text-center">
					<div class="service-icon text-center">
						<img loading="lazy" class="img-fluid" src="{{ url ('template/images/pendidikan.png')}}" alt="Pendidikan">
					</div>
					<h3>PENDIDIKAN</h3>
					<p>Mengupayakan dan mengkoordinir segala kegiatan yang bersifat pengembangan dan keilmuan khususnya di bidang teknologi informasi baik intern maupun ekstern kampus.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 color-bg text-center">
					<div class="service-icon text-center">
						<img loading="lazy" class="img-fluid" src="{{ url ('template/images/kominfo.png')}}" alt="Kominfo">
					</div>
					<h3>KOMINFO</h3>
					<p>Menyampaikan segala bentuk informasi serta membidangi segala macam informasi di bidang design dan editing foto & video.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4  text-center">
					<div class="service-icon text-center">
						<img loading="lazy" class="img-fluid" src="{{ url ('template/images/psdm.png')}}" alt="Sdm">
					</div>
					<h3>PSDM</h3>
					<p>Bertanggung jawab untuk menjaga serta meningkatkan solidaritas dan rasa kekeluargaan antar anggota melalui program kerja dan jobdesk yang dijalankannya.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 color-bg text-center">
					<div class="service-icon text-center">
						<img loading="lazy" class="img-fluid" src="{{ url ('template/images/advokasi.png')}}" alt="Advokasi">
					</div>
					<h3>ADVOKASI</h3>
					<p>Membantu menyampaikan Aspirasi Mahasiswa dan menjadi antara Mahasiswa dengan Petinggi Jurusan.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 text-center">
					<div class="service-icon text-center">
						<img loading="lazy" class="img-fluid" src="{{ url ('template/images/minatbakat.png')}}" alt="Minat & Bakat">
					</div>
					<h3>MINAT &amp; BAKAT</h3>
					<p>Menyelenggarakan kegiatan yang bisa mewadahi minat dan bakat Mahasiswa dan mencari informasi bakat minat Anggota.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->



    <section class="blog" id="blog">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2> Berita <span class="color">Terbaru</span></h2>
					<div class="border"></div>
					<p>Berikut ini adalah Postingan Berita, Artikel, dan Blog Terbaru dari Himpunan Mahasiswa Teknik Informatika (HIMATIF) STMIK Jabar.</p>
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
			@foreach($berita as $b)
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ url('images/berita/'. $b->foto_berita) }}" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="{{ $b->berita() }}">{{$b->judul_berita}}</a></h3>
						<p>{{$b->headline}}</p>
						<a class="btn btn-main" href="{{ $b->berita() }}">Selengkapnya</a>
					</div>
				</div>
			</article>
			@endforeach
			<!-- end single blog post -->
		</div>
		{{ $berita->links () }}
	</div>
	 
</section>


@endsection