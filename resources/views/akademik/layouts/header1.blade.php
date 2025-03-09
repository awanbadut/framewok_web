<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class=container-fluid>
        <a class="navbar-brand" href="/">Akademik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">    
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('prodi',['jurusan'=>'Teknologi INFORMASI','prodi'=>'TRPL'])}}">Prodi</a>
                </li>

            </ul>
        </div>
    </div>
    </nav>
</header>