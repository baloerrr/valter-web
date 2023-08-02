<section class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    Sponsor
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    Sponsor
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    Sponsor
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    Sponsor
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    Sponsor
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container pb-5" id="tentang">
    <h1 class="display-5 fw-bold text-center pt-5">Tentang</h1>
    <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>

    <div class="row py-5">

        <div class="col align-items-center">
            <div class="kotak">
                <p>video teaser</p>
            </div>
        </div>
        <div class="col">
            <p>
                Festival Multimedia dan Komputer (VALTER)
            </p>
            <p>
                Festival Multimedia dan Komputer VALTER adalah acara nasional yang diadakan oleh Himpunan Mahasiswa
                Jurusan Teknik Komputer Politeknik Negeri Sriwijaya (Polsri). Tujuannya adalah memajukan kreativitas dan
                keterampilan peserta di bidang teknologi informasi dan komunikasi. Acara ini terbuka untuk umum,
                khususnya mahasiswa dan pelajar di seluruh Indonesia. Tema tahun ini adalah "Folding the Future of
                Technology".
            </p>
            <a class="btn btn-sm btn-primary rounded-pill  fw-bold px-3" href="">Selengkapnya</a>
        </div>
    </div>
</section>

<section class="bg-light py-5" id="bintangtamu">
    <div class="container">

        <h1 class="display-5 fw-bold text-center pt-5">Bintang Tamu</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>

        <div class="row py-5">
            <div class="col-lg-4 col-md-6 col-sm-12 my-2 px-4">
                <div class="card shadow">
                    <img src="https://placeholder.pics/svg/300" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">Tamu 1</h5>
                        <div class="text-muted">Tutor/Teacher<div class="px-1"
                                style="float: right; color: rgb(56, 56, 56); background-color: rgb(206, 206, 206);">Juri
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-2  px-4">
                <div class="card shadow">
                    <img src="https://placeholder.pics/svg/300" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">Tamu 2</h5>
                        <div class="text-muted">Tutor/Teacher<div class="px-1"
                                style="float: right; color: rgb(56, 56, 56); background-color: rgb(206, 206, 206);">Juri
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-2  px-4">
                <div class="card shadow">
                    <img src="https://placeholder.pics/svg/300" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">Tamu 3</h5>
                        <div class="text-muted">Tutor/Teacher<div class="px-1"
                                style="float: right; color: rgb(56, 56, 56); background-color: rgb(206, 206, 206);">Juri
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kegiatan">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-center pt-5">Kegiatan</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>
    </div>
    {{-- <section class=" mt-5">
        <h3 class="text-center">Kegiatan</h3>
        <div class="row justify-content-center text-decoration-none">
            @foreach ($kegiatans as $kegiatan)
                <div class="col-md-4">
                    <a href="/kegiatan/{{ $kegiatan->slug }}" class="card text-decoration-none mt-3" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kegiatan->nama_kegiatan }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section> --}}

    <div class="container py-5">
        <div class="row justify-content-center mx-auto">
            @foreach ($kegiatans as $kegiatan)
                <div class="col-lg-4 col-sm-4 my-4 ">
                    <a href="/kegiatan/{{ $kegiatan->slug }}"
                        class="card mx-auto shadow py-4 text-center text-decoration-none">
                        <img src="{{ asset($kegiatan->gambar) }}" width="100%" alt="">
                        <p class="mt-auto text-muted fw-bold">{{ $kegiatan->nama_kegiatan }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="download" class="background py-5">
    <div class="container">
        <h1 class="display-3 fw-bold text-white text-center py-5">BUKU PANDUAN VALTER</h1>
        <div class="text-center py-5">
            <a class="btn btn-lg btn-light border-0 rounded-pill fw-bold px-5 " href="#">
                <div class="text">Download</div>
            </a>
        </div>
    </div>
</section>

<section id="dokumentasi">
    <div class="container py-5">
        <h1 class="display-5 fw-bold text-center pt-5">Dokumentasi</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;">
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
            <div class="col-4 mb-4">
                <img src="https://placeholder.pics/svg/300" width="100%" alt="">
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5" id="kontak">
    <div class="container">
        <h1 class="display-5 fw-bold text-center ">Kontak</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>

        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-5 me-auto text-muted">
                    <h1 class="fw-bold">Festival Multimedia dan Komputer (VALTER)<span class="ungu"> POLSRI</span>
                    </h1>
                    <p class="fs-5">2P9M+294, Jl. Srijaya Negara, Bukit Lama, Kec. Ilir Bar. I, Kota Palembang,
                        Sumatera Selatan 30128</p>
                    <p class="mb-4"><i class="fa-sharp fa-solid fa-location-dot ungu"></i> Indonesia, Palembang</p>

                </div>
                <div class="col-lg-6 text-end">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.645599186588!2d104.7329839!3d-2.9832189!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75ec487f021d%3A0x63054012aa39de4f!2sPoliteknik%20Negeri%20Sriwijaya!5e0!3m2!1sid!2sid!4v1688853104279!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
</section>
