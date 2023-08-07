<nav class="navbar navbar-expand-lg bg-white rounded-bottom sticky-top shadow">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/valter/logo-polsri.png') }}" width="35" alt="logo-polsri">
            <img src="{{ asset('assets/img/valter/logo-hmj.png') }}" width="40" alt="logo-hmj">
            <img src="{{ asset('assets/img/valter/logo-valter-title.png') }}" width="120" alt="logo-valter">
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ Route::is('kegiatanDetail') ? '/' : '' }}#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ Route::is('kegiatanDetail') ? '/' : '' }}#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ Route::is('kegiatanDetail') ? '/' : '' }}#bintangtamu">Bintang
                        Tamu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ Route::is('kegiatanDetail') ? '/' : '' }}#kegiatan">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ Route::is('kegiatanDetail') ? '/' : '' }}#timeline">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"
                        href="{{ Route::is('kegiatanDetail') ? '/' : '' }}#dokumentasi">Dokumentasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ Route::is('kegiatanDetail') ? '/' : '' }}#kontak">Kontak</a>
                </li>

            </ul>
            <div class="d-flex align-items-center">
                @guest
                    <a class="fw-bold text-dark text-decoration-none me-3" href="{{ route('login') }}">Masuk</a>
                    <a class="btn btn-sm btn-primary rounded-pill  fw-bold px-3" href="{{ route('register') }}">Daftar</a>
                @else
                    <li class="dropdown" style="list-style: none;">
                        <button data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- @if (auth()->user()->avatar)
                                <img alt="image" src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                    class="profileImage rounded-circle mr-1 w-25">
                            @else
                                <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="profileImage rounded-circle mr-1">
                            @endif --}}
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @can('admin')
                                <a href="{{ route('dashboard') }}"
                                    class="dropdown-item has-icon {{ Route::is('dashboard*') ? 'active' : '' }}">
                                    <i class="fas fa-user"></i> Dashboard
                                </a>
                            @endcan
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item has-icon text-danger btn-logout">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </li>
                @endguest
            </div>
        </div>
    </div>
</nav>
