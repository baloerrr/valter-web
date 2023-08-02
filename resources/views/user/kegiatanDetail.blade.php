@extends('user.layouts.main')

@section('container')
    <section class="my-4">
        <div class="row">
            <div class="col-md-6">
                <h3>{{ $kegiatan->nama_kegiatan }}</h3>
                <p>{{ $kegiatan->deskripsi }}</p>
            </div>
            <div class="col-md-6">
                @include('user.partials.register')
            </div>
        </div>
    </section>
@endsection
