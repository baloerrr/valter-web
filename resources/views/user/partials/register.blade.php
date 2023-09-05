<div class="card mb-5">
    @php
        $webDesignSlug = 'lomba-web-design';
        $designLogoSlug = 'lomba-design-logo';
        $pelatihanSlug = 'pelatihan';
        $seminarSlug = 'seminar';
        $mobileLegendSlug = 'lomba-mobile-legend';
        
        $slug = $kegiatan->slug;
        
        $allowedSlugs = ['lomba-web-design', 'lomba-design-logo', 'lomba-mobile-legend'];
    @endphp

    @guest
        <div class="card-header text-center bg-primary text-white">
            @if (in_array($kegiatan->slug, $allowedSlugs))
                <h4>20 September 2023</h4>
            @else
                <h4>2 Oktober 2023</h4>
            @endif
        </div>
        <div class="card-body text-center">
            <p>Maaf Anda belum login</p>
            <a href="{{ route('login') }}" class="btn btn-primary w-100 rounded-pill">Login<a>
        </div>
    @else
        @php
            $userDaftar = App\Models\DaftarKegiatan::where('user_id', auth()->user()->id)
                ->where('kegiatan_id', $kegiatan->id)
                ->first();
        @endphp

        @if ($userDaftar)
            <div class="card-header text-center bg-primary text-white">
                @if (in_array($kegiatan->slug, $allowedSlugs))
                    <h4>20 September 2023</h4>
                @else
                    <h4>2 Oktober 2023</h4>
                @endif
            </div>
            <div class="bg-white card-body text-center">
                <h5 class="text-success">Berhasil mendaftar</h5>
                @if ($userDaftar->status == 'belum divalidasi')
                    <div class="btn btn-warning rounded-pill text-white">
                        <p class="mb-0">{{ $userDaftar->status }}</p>
                    </div>
                @else
                    <div class="btn btn-success rounded-pill text-white ">
                        <p class="mb-0">{{ $userDaftar->status }}</p>
                    </div>
                @endif
            </div>
        @else
            @can('user')
                <div class="card-header text-center bg-primary text-white">
                    <p>Batas Pendaftaran</p>
                    @if (in_array($kegiatan->slug, $allowedSlugs))
                        <h4>20 September 2023</h4>
                    @else
                        <h4>2 Oktober 2023</h4>
                    @endif
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data"
                        action="{{ route('proses_pendaftaran', ['slug' => $kegiatan->slug, 'id' => $user->id]) }}"
                        method="POST">
                        @method('POST')
                        @csrf
                        <input type="hidden" name="kegiatan_id" value="{{ $kegiatan->id }}">
                        <div class="mb-3">
                            <label for="no_whatsapp" class="form-label">Nomor Whatsapp</label>
                            <input type="number" class="form-control rounded-pill " name="no_whatsapp" id="no_whatsapp"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="asal_instansi" class="form-label">Asal Instansi</label>
                            <input type="text" class="form-control rounded-pill" name="asal_instansi" id="asal_instansi">
                        </div>

                        {{-- @php
                            $allowedSlugs = ['lomba-web-design', 'lomba-design-logo', 'lomba-mobile-legend'];
                        @endphp --}}
                        @if (in_array($kegiatan->slug, $allowedSlugs))
                            <div class="mb-3">
                                <label for="pembayaran" class="form-label">Pembayaran</label>
                                <div class="text-center d-flex flex-column align-items-center">
                                    <label for="scanPembayaran" class="form-label">Scan Pembayaran via DANA</label>
                                    <img style="width: 150px" src="{{ asset('assets/img/valter/qrcode_delima.jpeg') }}"
                                        id="scanPembayaran" alt="">
                                    <p class="form-label">atau</p>

                                    <div class="input-group w-100">
                                        <input id="textToCopy" class="form-control rounded-pill d-inline-block"
                                            name="bukti_pembayaran" value="085841431872 (DANA: Delima Ayu Anugrah)" readonly>
                                        <button class="btn btn-primary mx-2 rounded-pill d-inline-block" type="button"
                                            id="copyButton"><i id="copyIcon" class="fa-regular fa-clipboard"></i></button>
                                        <div class="toast-container  p-3">
                                            <div id="copyAlert" class="toast" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-body">
                                                    Teks berhasil disalin!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="mb-3">
                                <label for="pembayaran" class="form-label">Pembayaran</label>
                                <div class="text-center d-flex flex-column align-items-center">
                                    <label for="scanPembayaran" class="form-label">Scan Pembayaran via DANA</label>
                                    <img style="width: 150px" src="{{ asset('assets/img/valter/qrcode_chintya.jpeg') }}"
                                        id="scanPembayaran" alt="">
                                    <p class="form-label">atau</p>

                                    <div class="input-group w-100">
                                        <input id="textToCopy" class="form-control rounded-pill d-inline-block"
                                            name="bukti_pembayaran" value="088277551811 (DANA: Chintya Salma Ayu)" readonly>
                                        <button class="btn btn-primary mx-2 rounded-pill d-inline-block" type="button"
                                            id="copyButton"><i id="copyIcon" class="fa-regular fa-clipboard"></i></button>
                                        <div class="toast-container  p-3">
                                            <div id="copyAlert" class="toast" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-body">
                                                    Teks berhasil disalin!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- <div class="mb-3">
                            <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                            <input type="file" class="form-control rounded-pill" name="bukti_pembayaran"
                                id="bukti_pembayaran">
                        </div> --}}

                        <div class="mb-3">
                            <label for="bukti_pembayaran" class="form-label">Konfirmasi Pembayaran</label>

                            @if ($slug == $webDesignSlug)
                                <a href="https://wa.me/6285161445224?text=Saya mau mengirim bukti bayar"
                                    class="btn btn-success w-100 rounded-pill">Kirim Bukti Pembayaran</a>
                            @elseif ($slug == $designLogoSlug)
                                <a href="https://wa.me/628974194248?text=Saya mau mengirim bukti bayar"
                                    class="btn btn-success w-100 rounded-pill">Kirim Bukti Pembayaran</a>
                            @elseif ($slug == $designLogoSlug)
                                <a href="https://wa.me/6285384086119?text=Saya mau mengirim bukti bayar"
                                    class="btn btn-success w-100 rounded-pill">Kirim Bukti Pembayaran</a>
                            @elseif ($slug == $pelatihanSlug)
                                <a href="https://wa.me/6288268126490?text=Saya mau mengirim bukti bayar"
                                    class="btn btn-success w-100 rounded-pill">Kirim Bukti Pembayaran</a>
                            @elseif ($slug == $seminarSlug)
                                <a href="https://wa.me/6285694477188?text=Saya mau mengirim bukti bayar"
                                    class="btn btn-success w-100 rounded-pill">Kirim Bukti Pembayaran</a>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">Daftar</button>
                    </form>
                </div>
            @endcan
        @endif
    @endguest
</div>

@push('styles')
    <style>
        .card,
        .card-body {
            border-top-left-radius: 40px !important;
            border-top-right-radius: 40px !important;
            border-bottom-left-radius: 40px !important;
            border-bottom-right-radius: 40px !important;
            border: none
        }

        .card-header {
            border-top-left-radius: 40px !important;
            border-top-right-radius: 40px !important;
            border: none
        }
    </style>
@endpush


@push('scripts')
    <script>
        const copyButton = document.getElementById('copyButton');
        const textToCopy = document.getElementById('textToCopy');
        const copyAlert = document.getElementById('copyAlert');

        console.log(copyAlert);

        if (copyButton) {
            copyButton.addEventListener('click', () => {
                // Get the value from input
                const valueToCopy = textToCopy.value;

                const numbersOnly = valueToCopy.replace(/\D/g, '');

                const tempInput = document.createElement('input');
                tempInput.value = numbersOnly;
                document.body.appendChild(tempInput);

                tempInput.select();
                document.execCommand('copy');

                document.body.removeChild(tempInput);

                const toast = new bootstrap.Toast(copyAlert);
                toast.show();
                setTimeout(() => {
                    toast.hide()
                }, 2000);


            });
        }
    </script>
@endpush
