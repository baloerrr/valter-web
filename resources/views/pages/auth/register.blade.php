@extends('layouts.auth')

@section('title', 'Register')

@push('styles')
    <style>
        .rounded {
            border-radius: 30px !important;
        }
    </style>
@endpush

@section('content')
    <section class="section background">
        <div class="container py-5">
            <div class="row m-0 min-vh-100 justify-content-center align-items-center">
                <div class="card w-100 rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 d-none d-lg-block">
                                <img style="object-fit: contain" src="{{ asset('assets/img/valter/logo-valter.png') }}"
                                    alt="" class="bg-white p-5 w-100 h-100">
                            </div>
                            <div class="col-md-6">
                                <div class="row h-100 m-0 p-0 justify-content-center align-items-center">
                                    <div class="col-md-8">
                                        <div class="card bg-transparent my-5 shadow-none mb-0 ">
                                            <div class="card-header">
                                                <div class="text-center w-100 ">
                                                    <h3 class="text">Daftar Akun</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('register') }}" autocomplete="off">
                                                    @csrf
                                                    <div class="mb-2">
                                                        <label for="name">Nama Lengkap</label>
                                                        <input value="{{ old('name') }}" id="name" type="text"
                                                            class="form-control rounded-pill @error('name') is-invalid @enderror"
                                                            name="name" autofocus>
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="username">Username</label>
                                                        <input value="{{ old('username') }}" id="username" type="text"
                                                            class="form-control rounded-pill @error('username') is-invalid @enderror"
                                                            name="username">
                                                        @error('username')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="email">Email</label>
                                                        <input value="{{ old('email') }}" id="email" type="text"
                                                            class="form-control rounded-pill @error('email') is-invalid @enderror"
                                                            name="email">
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="password" class="d-block">Password</label>
                                                        <input id="password" type="password"
                                                            class="form-control rounded-pill @error('password') is-invalid @enderror"
                                                            name="password">
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="password_confirmation" class="d-block">Password
                                                            Confirmation</label>
                                                        <input id="password_confirmation" type="password"
                                                            class="form-control rounded-pill @error('password_confirmation') is-invalid @enderror"
                                                            name="password_confirmation">
                                                        @error('password_confirmation')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-primary rounded-pill btn-lg btn-block">
                                                            Register
                                                        </button>
                                                    </div>
                                                </form>
                                                <p class="text-center mb-0">Copyright {{ date('Y') }} &copy;
                                                    {{ env('APP_NAME') }}.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-5">
                    <p class="mb-0">©2023 VALTER</p>
                </div>
            </div>
        </div>
    </section>
@endsection
