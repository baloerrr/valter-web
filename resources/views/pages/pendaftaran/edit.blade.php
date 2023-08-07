@extends('layouts.app')

@section('title', 'Edit User')
@section('desc', ' On this page you can edit a user. ')

@section('content')
    <form action="{{ url('user-pendaftaran/' . $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>User Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input readonly value="{{ old('name', $item->user->name) }}" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                    placeholder="Nama">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input readonly value="{{ old('email', $item->user->email) }}" type="text"
                                    class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="Email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_kegiatan" class="col-sm-3 col-form-label">Jenis Kegiatan</label>
                            <div class="col-sm-9">
                                <input readonly value="{{ old('nama_kegiatan', $item->kegiatan->nama_kegiatan) }}"
                                    type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror"
                                    name="nama_kegiatan" id="nama_kegiatan" placeholder="Jenis kegiatan">
                                @error('nama_kegiatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_whatsapp" class="col-sm-3 col-form-label">Nomor Whatsapp</label>
                            <div class="col-sm-9">
                                <input readonly value="{{ old('no_whatsapp', $item->no_whatsapp) }}" type="text"
                                    class="form-control @error('no_whatsapp') is-invalid @enderror" name="no_whatsapp"
                                    id="no_whatsapp" placeholder="Nomor whatsapp">
                                @error('no_whatsapp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal_instansi" class="col-sm-3 col-form-label">Asal Instansi</label>
                            <div class="col-sm-9">
                                <input readonly value="{{ old('asal_instansi', $item->asal_instansi) }}" type="text"
                                    class="form-control @error('asal_instansi') is-invalid @enderror" name="asal_instansi"
                                    id="asal_instansi" placeholder="Asal instansi">
                                @error('asal_instansi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status"
                                    class="form-control text-capitalize @error('status') is-invalid @enderror">
                                    <option value="belum divalidasi">Belum divalidasi</option>
                                    <option value="sudah divalidasi">Sudah divalidasi</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Bukti Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        @if ($item->bukti_pembayaran)
                            <img alt="image" src="{{ asset('storage') }}/{{ $item->bukti_pembayaran }}"
                                class="rounded-circle w-100 mb-3">
                        @else
                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle w-100 mb-3">
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
