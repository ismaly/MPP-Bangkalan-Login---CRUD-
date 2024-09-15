<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage-profil.index') }}">Manage Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage-fasilitas.index') }}">Manage Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage-pelayanan.index') }}">Manage Layanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage-sub-pelayanan.index') }}">Manage Sub Pelayanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage-syarat.index') }}">Manage Persyaratan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage-instansi.index') }}">Manage Instansi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage-galeri.index') }}">Manage Galeri</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
            <li class="nav-item">
                <b><a class="nav-link">{{ $user->nama_user }}</a></b>
            </li>
        </ul>
    </div>
</nav>
