@extends('user.layouts.main')

@section('container')
    <section class="">
        <div class="background">
            <div class="container w-full">
                <div class="row  py-5 d-flex">
                    <div data-aos="fade-right" class="col-md-6 text-white d-flex align-items-center">
                        <h1>{{ $kegiatan->nama_kegiatan }}</h3>
                    </div>
                    <div data-aos="fade-left" class="col-md-6 d-flex justify-content-between align-items-center">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-outline-light rounded-pill ms-md-auto text-decoration-none">lihat
                            Poster</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row min-vh-100">
                <div style="text-align: justify" data-aos="fade-right" class="col-md-7">
                    <h3>{{ $kegiatan->nama_kegiatan }}</h3>
                    <p>{!! $kegiatan->deskripsi !!}</p>
                </div>
                <div data-aos="fade-left" class="col-md-5">
                    @include('user.partials.register')
                </div>
            </div>
        </div>
    </section>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="posterImg" src="{{ asset($kegiatan->poster) }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .posterImg {
            width: 100%;
            height: 100%;
            object-fit: contain
        }
    </style>
@endpush
