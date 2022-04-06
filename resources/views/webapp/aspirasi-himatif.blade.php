@extends('webapp.layouts.aspirasi')

@section ('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Aspirasi</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url ('/')}}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Aspirasi</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Anda anggota HIMATIF STMIK JABAR?</h2>
				<p>Silahkan klik login/masuk dibawah ini untuk menyampaikan aspirasi Anda!</p>
				<a href="{{ url('/login')}}" class="btn btn-main">Masuk</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>

<section class="contact-us" id="contact">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="col-12">
			<div class="title text-center" >
				<h2>Wadah Aspirasi Masyarakat</h2>
				<p>Memiliki aspirasi? Silahkan salurkan aspirasi kalian untuk HIMATIF STMIK Jabar agar lebih baik lagi kedepannya!</p>
				<div class="border"></div>
			</div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-details col-md-6 " >
				<h3>Kontak Kami</h3>
				<p>Silahkan hubungi kami Dibawah Ini untuk lebih lanjut!</p>
				<ul class="contact-short-info" >
					<li>
						<i class="tf-ion-ios-home"></i>
						<span>Jl. Soekarno-Hatta No.777, Cisaranten Endah, Kec. Arcamanik, Kota Bandung, Jawa Barat 40292</span>
					</li>
					<li>
						<i class="tf-ion-android-globe"></i>
						<span>Instagram: <a href="https://www.instagram.com/himatif_stmik_jabar/">@himatif_stmik_jabar</a></span>
					</li>
					<li>
						<i class="tf-ion-android-mail"></i>
						<span>Email: himatif@stmikjabar.ac.id</span>
					</li>
				</ul>
				<!-- Footer Social Links -->
				<!--/. End Footer Social Links -->
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<form action="{{ url ('/aspirasi/post') }}" method="post">
					@csrf
					<div class="form-group">
						<input type="text" placeholder="Nama Anda" class="form-control" name="nama" id="nama">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Nama Instansi" class="form-control" name="nama_instansi" id="nama_instansi">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Perihal" class="form-control" name="perihal" id="perihal">
					</div>
					<div class="form-group">
						<select class="form-control" name="pilih" id="pilih">
							<option>-- Pilih --</option>
							<option value="dosen">Dosen</option>
                            <option value="mahasiswa">Mahasiswa</option>
							<option value="alumni">Alumni</option>
							<option value="publik">Publik</option>
                        </select>
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Isi Aspirasi" class="form-control" name="isi" id="isi"></textarea>	
					</div>
					
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Kirim">
					</div>						
					
				</form>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>

@endsection