<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-6 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>
    {{-- ISI --}}
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <h4 class="mb-0">Berikut Profil dari saya.</h4>
        </div>
    </div>
    <div class="container mt-4 d-flex justify-content-center">
        <div class="card mb-3" style="width: 1000px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/opsi.jpg') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title font-monospace text-center">My Profile Me</h5><br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item font-monospace">Nama: Anisha Trie Aprilyasa</li>
                        <li class="list-group-item font-monospace">Nama Panggilan: Nishaaa</li>
                        <li class="list-group-item font-monospace">Asal: BOJONEGORO</li>
                        <li class="list-group-item font-monospace">NIM: 1204210138</li>
                        <li class="list-group-item font-monospace">Prodi: Sistem Informasi</li>
                        <li class="list-group-item font-monospace"></li>
                      </ul> 
                    <p class="font-monospace text-justify">Saya manusia biasa yang banyak dosa, saya menempuh pendidikan di IT Telkom Surabaya dan sekarang menjadi Mahasiswa AKTIF semester 4</p>
                </div>
              </div>
            </div>
          </div>
    {{-- Akhir ISI --}}
    @vite('resources/js/app.js')
</body>
</html>
