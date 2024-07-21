<nav class="navbar navbar-expand-lg navbar-light bg-light bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#benefit">Benefit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#paket">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kelas">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak kami</a>
                </li>
                <!-- Mobile/Tablet Buttons -->
                <li class="nav-item d-lg-none">
                    <button class="btn btn-demo w-100 my-2">Ajukan Demo</button>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="btn btn-outline btn-masuk w-100 my-2" href="{{ route('login') }}"><span>Masuk</span></a>
                    {{-- <button class="btn btn-outline btn-masuk w-100 my-2">Masuk</button> --}}
                </li>
            </ul>
        </div>
        <!-- Desktop Buttons -->
        <div class="d-flex navbar-buttons">
            <button class="btn btn-demo me-2">Ajukan Demo</button>
            <a class="btn btn-outline btn-masuk" href="{{ route('login') }}"><span>Masuk</span></a>
            {{-- <button class="btn btn-outline btn-masuk">Masuk</button> --}}
        </div>
    </div>
</nav>
