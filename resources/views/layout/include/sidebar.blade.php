<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="himatif.png" alt="Himatif Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HIMATIF</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            @can('writer')
            <li class="nav-header">WRITER</li>
            <li class="nav-item">
                <a href="{{ url('/berita') }}" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Berita                        
                    </p>
                </a>
            </li>
            @endcan
            @can('admin')
            <li class="nav-item">
                <a href="{{ url('/aspirasi') }}" class="nav-link">
                    <i class="nav-icon fas fa-lightbulb"></i>
                    <p>
                        Data Aspirasi
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/struktur') }}" class="nav-link">
                    <i class="nav-icon fas fa-sitemap"></i>
                    <p>
                        Data Struktur Organisasi
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/visimisi') }}" class="nav-link">
                    <i class="nav-icon fas fa-low-vision"></i>
                    <p>
                        Data Visi & Misi 
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url ('/agenda') }}" class="nav-link">
                <i class="nav-icon fas fa-calendar"></i>
                    <p>
                        Agenda 
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url ('/highlight')}}" class="nav-link">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>
                        Highlight Kegiatan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/anggota')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Data Anggota
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-rectangle-history"></i>
                    <p>
                        Galeri
                    </p>
                </a>
            </li>
            @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>