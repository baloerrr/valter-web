<section class="container py-5">
    <div class="row mt-5">
        @foreach ($sponsors as $sponsor)
            <div class="col-md-3 col-6 mt-3 d-lg-block d-none">
                <div data-aos="fade-right" class="card">
                    <div class="card-body card-width text-center">
                        <img class="sponsorImg" src="{{ asset($sponsor->gambar) }}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
        <div class="image-container d-flex overflow-x-auto d-lg-none d-block">
            @foreach ($sponsors as $sponsor)
                <div data-aos="fade-right" class="card" style="flex: 0 0 auto; margin-right: 10px;">
                    <div class="card-body text-center">
                        <img class="sponsorImg" src="{{ asset($sponsor->gambar) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="container pb-5" id="tentang">
    <h1 data-aos="fade-right" class="display-5 fw-bold text-center pt-5">Tentang</h1>
    <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>
    <div class="row py-5">
        <div data-aos="fade-right" class="col-md-6 align-items-center">
            <div class="ratio ratio-16x9 mb-3">
                <iframe class="col-8" width="588" height="315"
                    src="{{ asset('assets/img/valter/TEASER VALTER FIXX 2023.mp4') }}" allowfullscreen sandbox></iframe>
            </div>
        </div>
        <div data-aos="fade-left" class="col-md-6 smaller-text align-items-center">
            <p>
                Festival Multimedia dan Komputer (VALTER)
            </p>
            <p style="text-align: justify">
                Festival Multimedia dan Komputer VALTER adalah acara nasional yang diadakan oleh Himpunan Mahasiswa
                Jurusan Teknik Komputer Politeknik Negeri Sriwijaya (Polsri). Tujuannya adalah memajukan kreativitas dan
                keterampilan peserta di bidang teknologi informasi dan komunikasi. Acara ini terbuka untuk umum,
                khususnya mahasiswa dan pelajar di seluruh Indonesia. Tema tahun ini adalah "Folding the Future of
                Technology".
            </p>
            <a class="btn btn-sm btn-primary rounded-pill  fw-bold px-3"
                href="https://www.instagram.com/valterpolsri/">Selengkapnya</a>
        </div>
    </div>
</section>

<section class="bg-light py-5" id="bintangtamu">
    <div class="container">
        <h1 data-aos="fade-right" class="display-5 fw-bold text-center pt-5">Bintang Tamu</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>
        <div class="row py-5 justify-content-center">
            <div data-aos="fade-right" class="col-lg-4 col-md-6 col-8 col-sm-12 my-2 px-4">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/valter/Gerald_Vincent.jpg') }}"
                        class="guestImage card-img-top img-fluid rounded-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">Gerald Vincent</h5>
                        <div class="text-muted">Narasumber
                            {{-- <div class="px-1"
                                style="float: right; color: rgb(56, 56, 56); background-color: rgb(206, 206, 206);">Juri
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-lg-4 col-md-6 col-8 my-2 px-4">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/valter/Fikri_Haikal.jpg') }}"
                        class="guestImage card-img-top img-fluid rounded-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">Fikri Haikal</h5>
                        <div class="text-muted">Narasumber
                            {{-- <div class="px-1"
                                style="float: right; color: rgb(56, 56, 56); background-color: rgb(206, 206, 206);">Juri
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="kegiatan">
    {{-- <div class="py-5"> --}}
    <h1 data-aos="fade-right" class="display-5 fw-bold text-center pt-5">Kegiatan</h1>
    <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>
    {{-- </div> --}}
    <div class="container ">
        <div class="row justify-content-center mx-auto">
            @foreach ($kegiatans as $kegiatan)
                <div data-aos="zoom-in" class="col-lg-4 col-8 col-sm-4 my-4 ">
                    <a href="/kegiatan/{{ $kegiatan->slug }}"
                        class="card mx-auto shadow py-4 text-center text-decoration-none">
                        <img src="{{ asset($kegiatan->gambar) }}" class="kegiatanImg" width="100%" alt="">
                        <p class="mt-auto text-muted fw-bold">{{ $kegiatan->nama_kegiatan }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="timeline mt-3 bg-white">
    <div class="py-5 bg-white">
        <h1 data-aos="fade-right" class="display-5 fw-bold text-center pt-5">Timeline</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>
    </div>
    <div class="timeline bg-white">

        @foreach ($timelines as $index => $timeline)
            <div class="timeline-row">
                @if ($index % 2 === 0)
                    <div data-aos="fade-left" class="timeline-time display-5 text-muted fw-bold text-center">
                        {{ $timeline->kegiatan }}<small>{{ $timeline->tanggal }}</small>
                    </div>
                    <div data-aos="fade-right" class="timeline-content">
                        <img class="timelineImg" src="{{ asset($timeline->gambar) }}" alt="">
                    </div>
                @else
                    <div data-aos="fade-right" class="timeline-time display-5 text-muted fw-bold text-center">
                        {{ $timeline->kegiatan }}<small>{{ $timeline->tanggal }}</small>
                    </div>
                    <div data-aos="fade-left" class="timeline-content2">
                        <img class="timelineImg" src="{{ asset($timeline->gambar) }}" alt="">
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    <div data-aos="fade-right" class="text-center postition-relative bg-white ">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
            class="btn btn-primary rounded-pill ms-md-auto text-decoration-none">Selengkapnya</button>
    </div>
</section>

<section id="download" class="background py-5">
    <div class="container">
        <h1 data-aos="fade-right" class="display-3 fw-bold text-white text-center py-5">BUKU PANDUAN VALTER</h1>
        <div data-aos="fade-left" class="text-center py-5">
            <a class="btn btn-lg btn-light border-0 rounded-pill fw-bold px-5 " href="#">
                <div class="text">Download</div>
            </a>
        </div>
    </div>
</section>

<section id="dokumentasi">
    <div class="container ">
        <h1 data-aos="fade-right" class="display-5 fw-bold text-center pt-5">Dokumentasi</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;">
        </div>
        <div class="row justify-content-center ">
            @foreach ($dokumentasis as $dokumentasi)
                <div data-aos="fade-right" class="col-md-4 mb-4 ">
                    <div class="dokumentasi text-center">
                        <img class="fotoDokumentasi" src="{{ $dokumentasi->foto }}" width="100%" alt="">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>


<section class="bg-light " id="kontak">
    <div class="container">
        <h1 data-aos="fade-right" class="display-5 fw-bold text-center pt-5">Kontak</h1>
        <div class="background rounded-pill" style="width: 100px;height:5px;margin: auto;"></div>

        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div data-aos="fade-right" class="col-md-5 me-auto text-muted">
                    <h1 class="fw-bold">Festival Multimedia dan Komputer (VALTER)<span class="ungu"> POLSRI</span>
                    </h1>
                    <p class="fs-5">2P9M+294, Jl. Srijaya Negara, Bukit Lama, Kec. Ilir Bar. I, Kota Palembang,
                        Sumatera Selatan 30128</p>
                    <p class="mb-4"><i class="fa-sharp fa-solid fa-location-dot ungu"></i> Indonesia, Palembang</p>

                </div>
                <div data-aos="fade-left" class="col-md-6 text-end">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.645599186588!2d104.7329839!3d-2.9832189!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75ec487f021d%3A0x63054012aa39de4f!2sPoliteknik%20Negeri%20Sriwijaya!5e0!3m2!1sid!2sid!4v1688853104279!5m2!1sid!2sid"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
</section>

{{-- Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img class="posterImg" src="{{ asset('assets/img/valter/timeline_table.png') }}" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .card {
            transition: transform 0.5s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }


        .posterImg {
            width: 100%;
            height: 100%;
            object-fit: contain
        }

        */ .card:hover {
            transform: scale(1.025);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 5px 10px transition-delay: 0.8s;
        }

        .kegiatanImg {
            object-fit: contain;
            width: 400px;
            height: 400px;
        }

        .dokumentasi {
            transition: transform 0.5s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .dokumentasi:hover {
            transform: scale(1.025);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 5px 10px transition-delay: 0.8s;
        }

        .fotoDokumentasi {
            width: 350px;
            height: 350px;
            object-fit: contain
        }

        .sponsorImg {
            width: 100%;
            height: 150px;
            object-fit: contain
        }

        .card-width {
            height: 170px;
        }

        .image-container {
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
        }

        .image-container .card {
            flex-shrink: 0;
            width: 250px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        .image-container img {
            max-width: 100%;
            max-height: 100%;
        }

        .timeline {
            position: relative;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            padding: 5rem;
            margin: 0 auto 1rem auto;
            overflow: hidden;
            background: #ffffff
        }

        .timeline:after {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -2px;
            border-right: 2px dashed #4b546f;
            height: 100%;
            display: block;
        }

        .timeline-row {
            padding-left: 50%;
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-row .timeline-time {
            position: absolute;
            right: 50%;
            top: 15px;
            text-align: right;
            margin-right: 20px;
            color: #;
            font-size: 1.5rem;
        }

        .timeline-row .timeline-time small {
            display: block;
            font-size: 0.8rem;
        }

        .timeline-row .timeline-content {
            /* position: relative; */
            /* padding: 20px 30px; */
            /* background: #1a233a; */
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .timeline-row .timeline-content2 {
            /* position: relative; */
            /* padding: 20px 30px; */
            /* background: #1a233a; */
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .timeline-row .timeline-content:after {
            content: "";
            position: absolute;
            top: 20px;
            height: 16px;
            width: 16px;
            /* background: #1a233a; */
        }

        .timeline-row .timeline-content:before {
            content: "";
            position: absolute;
            top: 20px;
            right: -49px;
            width: 20px;
            height: 20px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            z-index: 10;
            background: #272e48;
            border: 2px dashed #4b546f;
        }

        .timeline-row .timeline-content2:after {
            content: "";
            position: absolute;
            top: 20px;
            height: 16px;
            width: 16px;
            /* background: #1a233a; */
        }

        .timeline-row .timeline-content2:before {
            content: "";
            position: absolute;
            top: 20px;
            right: -49px;
            width: 20px;
            height: 20px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            z-index: 10;
            background: #272e48;
            border: 2px dashed #4b546f;
        }

        .timeline-row .timeline-content h4 {
            margin: 0 0 20px 0;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            line-height: 150%;
        }

        .timeline-row .timeline-content p {
            margin-bottom: 30px;
            line-height: 150%;
        }

        .timeline-row .timeline-content i {
            font-size: 1.2rem;
            line-height: 100%;
            padding: 15px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            background: #272e48;
            margin-bottom: 10px;
            display: inline-block;
        }

        .timeline-row .timeline-content .thumbs {
            margin-bottom: 20px;
            display: flex;
        }

        .timeline-row .timeline-content .thumbs img {
            margin: 5px;
            max-width: 60px;
        }

        .timeline-row .timeline-content .badge {
            color: #ffffff;
            background: linear-gradient(120deg, #00b5fd 0%, #0047b1 100%);
        }

        .timeline-row:nth-child(even) .timeline-content {
            margin-left: 40px;
            text-align: left;
        }

        .timeline-row:nth-child(even) .timeline-content:after {
            left: -8px;
            right: initial;
            border-bottom: 0;
            border-left: 0;
            transform: rotate(-135deg);
        }

        .timeline-row:nth-child(even) .timeline-content:before {
            left: -52px;
            right: initial;
        }

        .timeline-row .timeline-content2 h4 {
            margin: 0 0 20px 0;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            line-height: 150%;
        }

        .timeline-row .timeline-content2 p {
            margin-bottom: 30px;
            line-height: 150%;
        }

        .timeline-row .timeline-content2 i {
            font-size: 1.2rem;
            line-height: 100%;
            padding: 15px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            background: #272e48;
            margin-bottom: 10px;
            display: inline-block;
        }

        .timeline-row .timeline-content2 .thumbs {
            margin-bottom: 20px;
            display: flex;
        }

        .timeline-row .timeline-content2 .thumbs img {
            margin: 5px;
            max-width: 60px;
        }

        .timeline-row .timeline-content2 .badge {
            color: #ffffff;
            background: linear-gradient(120deg, #00b5fd 0%, #0047b1 100%);
        }

        .timeline-row:nth-child(even) .timeline-content2 {
            margin-left: 40px;
            text-align: left;
        }

        .timeline-row:nth-child(even) .timeline-content2:after {
            left: -8px;
            right: initial;
            border-bottom: 0;
            border-left: 0;
            transform: rotate(-135deg);
        }

        .timeline-row:nth-child(even) .timeline-content2:before {
            left: -52px;
            right: initial;
        }

        .timeline-row:nth-child(odd) {
            padding-left: 0;
            padding-right: 50%;
        }

        .timeline-row:nth-child(odd) .timeline-time {
            right: auto;
            left: 50%;
            text-align: left;
            margin-right: 0;
            margin-left: 20px;
        }

        .timeline-row:nth-child(odd) .timeline-content {
            margin-right: 40px;
        }

        .timeline-row:nth-child(odd) .timeline-content:after {
            right: -8px;
            border-left: 0;
            border-bottom: 0;
            transform: rotate(45deg);
        }

        .timeline-row:nth-child(odd) .timeline-content2 {
            margin-right: 40px;
        }

        .timeline-row:nth-child(odd) .timeline-content2:after {
            right: -8px;
            border-left: 0;
            border-bottom: 0;
            transform: rotate(45deg);
        }

        .timelineImg {
            width: 300px;
            height: 300px;
            object-fit: contain
        }

        @media (max-width: 992px) {

            .smaller-text {
                font-size: 14px;
                /* Ukuran font yang lebih kecil di layar mobile */
            }

            .timeline {
                padding: 15px;
            }

            .timeline:after {
                border: 0;
            }

            .timeline .timeline-row:nth-child(odd) {
                padding: 0;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-time {
                position: relative;
                top: 0;
                left: 0;
                margin: 0 0 10px 0;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content2 {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content:before {
                display: none;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content:after {
                display: none;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content2:before {
                display: none;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content2:after {
                display: none;
            }

            .timeline .timeline-row:nth-child(even) {
                padding: 0;
            }

            .timeline .timeline-row:nth-child(even) .timeline-time {
                position: relative;
                top: 0;
                left: 0;
                margin: 0 0 10px 0;
                text-align: left;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content {
                margin: 0;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content:before {
                display: none;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content:after {
                display: none;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content2 {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content2:before {
                display: none;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content2:after {
                display: none;
            }
        }
    </style>
@endpush
