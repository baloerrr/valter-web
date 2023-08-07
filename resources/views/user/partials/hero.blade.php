<div class="background">

    <div class="container">
        <div class="row min-vh-85 align-items-center">
            <div data-aos="fade-right" class="col-lg-6 me-auto text-white">
                <h1 class="display-3 fw-bold">VALTER 2023</h1>
                <p class="fs-5">Festival Multimedia dan Komputer (VALTER) adalah acara nasional yang diadakan oleh HMJ
                    Teknik
                    Komputer</p>
                <h3 id="deadline-text" class="text-warning mb-4 "></h3>
                <div class="card rounded-pill bg-white bg-opacity-10 border-0 shadow">
                    <div class="card-body text-center text-white py-1 pb-3">
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th id="days">
                                    </th>
                                    <th>
                                        :
                                    </th>
                                    <th id="hours">
                                    </th>
                                    <th>
                                        :
                                    </th>
                                    <th id="minutes">
                                    </th>
                                    <th>
                                        :
                                    </th>
                                    <th id="seconds">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        hari
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        jam
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        menit
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        detik
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
            <div data-aos="fade-left" class="col-lg-6 text-end d-none d-md-block">
                <img src="{{ asset('assets/img/valter/logo-valter.png') }}" width="90%" alt="">
            </div>
        </div>

        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave waveTop" style="background-image: url({{ asset('assets/img/valter/wave-top.png') }})">
                </div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"
                    style="background-image: url({{ asset('assets/img/valter/wave-mid.png') }})">
                </div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"
                    style="background-image: url({{ asset('assets/img/valter/wave-bot.png') }})">
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        @keyframes move_wave {
            0% {
                transform: translateX(0) translateZ(0) scaleY(1);
            }

            50% {
                transform: translateX(-25%) translateZ(0) scaleY(0.55);
            }

            100% {
                transform: translateX(-50%) translateZ(0) scaleY(1);
            }
        }

        .waveWrapper {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            margin: auto;
        }

        .waveWrapperInner {
            position: absolute;
            overflow-x: hidden;
            width: 100%;
            height: 100%;
            bottom: -20px;
            background-color: transparent;
        }

        .bgTop {
            z-index: 15;
            opacity: 0.5;
        }

        .bgMiddle {
            z-index: 10;
            opacity: 0.75;
        }

        .bgBottom {
            z-index: 5;
        }

        .wave {
            position: absolute;
            left: 0;
            overflow-x: hidden;
            width: 200%;
            height: 100%;
            background-repeat: repeat no-repeat;
            background-position: bottom;
            transform-origin: center bottom;
        }

        .waveTop {
            background-size: 50% 100px;
        }

        .waveAnimation .waveTop {
            animation: move-wave 3s;
            -webkit-animation: move-wave 3s;
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
        }

        .waveMiddle {
            background-size: 50% 120px;
        }

        .waveAnimation .waveMiddle {
            animation: move_wave 10s linear infinite;
        }

        .waveBottom {
            background-size: 50% 100px;
        }

        .waveAnimation .waveBottom {
            animation: move_wave 15s linear infinite;
        }
    </style>
@endpush
