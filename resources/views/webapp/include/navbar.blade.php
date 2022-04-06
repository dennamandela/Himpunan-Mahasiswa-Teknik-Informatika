<nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="{{ url('/')}}">
        <img class="logo-default" src="{{url ('template/images/himatif-logo.png') }}" alt="logo"/>
        <img class="logo-white" src="{{ url('template/images/himatif-logo.png') }}" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url ('/agenda')}}">Agenda</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url ('/aspirasi') }}">Aspirasi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Informasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/berita') }}">Berita</a>
              <a class="dropdown-item" href="{{ url('/kegiatan') }}">Kegiatan</a>
              <a class="dropdown-item" href="{{ url ('/galeri') }}">Galeri</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto text-right">
          <li class="nav-item">
            <a class="btn btn-outline-info" href="{{ url('/login')}}">Masuk</a>
          </li> 
        </ul>
      </div>
    </nav>