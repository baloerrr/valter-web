@extends('layouts.auth')

@section('title', 'Login')

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
                                                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="email">Email/Username</label>
                                                        <input id="email" type="text"
                                                            class="form-control w-100 rounded-pill @error('email') is-invalid @enderror"
                                                            name="email" tabindex="1" autofocus>
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="d-block">
                                                            <label for="password" class="control-label">Password</label>
                                                        </div>
                                                        <input id="password" type="password"
                                                            class="form-control rounded-pill @error('password') is-invalid @enderror"
                                                            name="password" tabindex="2">
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-lg btn-block rounded-pill"
                                                            tabindex="4">
                                                            Login
                                                        </button>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="">
                                                            <p class="mb-0">
                                                                Belum memiliki akun
                                                                <a href="{{ route('register') }}" class="text">
                                                                    Daftar
                                                                </a>
                                                            </p>
                                                            <a href="{{ route('password.request') }}" class="text ml-auto">
                                                                Lupa Password?
                                                            </a>
                                                        </div>
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
