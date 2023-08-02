<div class="border rounded text-center p-3">
    @guest
        <div>
            <p>Batas Pendaftaran</p>
            <p>10 Oktober 2023</p>
        </div>
        <div>
            <p>Maaf Anda belum login</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Login Sekarang<a>
        </div>
    @else
        {{-- @dd($user) --}}
        <form action="{{ route('proses_pendaftaran', ['slug' => $kegiatan->slug, 'id' => $user->id]) }}" method="POST">
            @method('POST')
            @csrf
            <input type="hidden" name="kegiatan_id" value="{{ $kegiatan->slug }}">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required><br>
            <label for="asal_instansi">Asal Instansi:</label>
            <input type="text" id="asal_instansi" name="asal_instansi" required><br>
            <!-- Input tersembunyi untuk jenis kegiatan -->
            <input type="hidden" id="jenis_kegiatan" name="jenis_kegiatan" value="{{ $kegiatan->slug }}">
            <button type="submit">Daftar</button>
        </form>
    @endguest
</div>
