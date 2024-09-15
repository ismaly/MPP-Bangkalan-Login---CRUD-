 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="default/img/logo.png" alt="" width="65px" height="65px">
        <br>
        <h2 class="m-0 text-greendark">MPP Bangkalan</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
            {{-- <a href="{{ url('/about') }}" class="nav-item nav-link">About</a> --}}
            <a href="{{ url('/pelayanan') }}" class="nav-item nav-link">Pelayanan</a>
            {{-- <a href="{{ url('/project') }}" class="nav-item nav-link">Project</a> --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Prinsip Layanan</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ url('/visi') }}" class="dropdown-item">Visi dan Misi</a>
                    {{-- <a href="{{ url('/motto') }}" class="dropdown-item">Motto</a> --}}
                    <a href="{{ url('/maklumat') }}" class="dropdown-item">Maklumat Pelayanan</a>
                    <a href="{{ url('/etika') }}" class="dropdown-item">Kode Etik</a>
                    {{-- <a href="404.html" class="dropdown-item">404 Page</a> --}}
                </div>
            </div>
            <a href="{{ url('/instansi') }}" class="nav-item nav-link">Instansi</a>
            

            {{-- <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a> --}}
        </div>
        {{-- <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px; border-radius: 5px; margin-right: 15px;">Login</button> --}}
        <a href="{{ route('login') }}" style="display: inline-block; padding: 5px 10px; font-size: 12px; border-radius: 5px; margin-right: 15px; background-color: #AB7442; color: white; text-decoration: none; text-align: center; line-height: 1.5;">
            Login
        </a>
               
        {{-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i
                class="fa fa-arrow-right ms-3"></i></a> --}}
    </div>
</nav>
<!-- Navbar End -->