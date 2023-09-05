<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valter 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/valter/style.css') }}">
    <link rel="icon" href="{{ asset('assets/img/valter/logo-valter.png') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="fa/fontawesome-free-6.4.0-web/css/all.css">

    @stack('styles')
</head>

<body class="overflow-x-hidden" id="beranda">
    <header>
        @include('user.layouts.header')
    </header>

    <div class="backgroundDetail">
        @yield('container')
    </div>

    <footer class="py-5">
        @include('user.layouts.footer')
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        function startCountdown(targetDate) {
            const countdownInterval = setInterval(function() {
                const now = new Date().getTime();
                const timeRemaining = targetDate - now;

                let deadline = document.querySelector('#deadline-text');
                if (timeRemaining <= 0) {
                    clearInterval(countdownInterval);
                    document.querySelector('#deadline-text').innerText = 'Pendaftaran telah habis!'

                    // Set jadwal baru untuk countdown
                    const newTargetDate = new Date('2023-10-03T00:00:00').getTime();
                    startCountdown(newTargetDate); // Mulai countdown baru dengan jadwal baru
                } else {
                    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                    document.querySelector('#days').innerText = days;
                    document.querySelector('#hours').innerText = hours;
                    document.querySelector('#minutes').innerText = minutes;
                    document.querySelector('#seconds').innerText = seconds;
                    document.querySelector('#deadline-text').innerText = 'Batas pendaftaran: 26 September 2023'

                }
            }, 1000);
        }

        // Set jadwal awal untuk countdown
        const targetDate = new Date('2023-09-26T00:00:00').getTime();
        startCountdown(targetDate);

        AOS.init();
    </script>

    <script src="https://kit.fontawesome.com/439b1bb2f3.js" crossorigin="anonymous"></script>

    @stack('scripts')
</body>

</html>
