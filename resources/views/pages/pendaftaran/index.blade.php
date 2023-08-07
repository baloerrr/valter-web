@extends('layouts.app')

@section('title', 'Manage Pendaftaran')
@section('desc', ' On this page you can manage users. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>User List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <select id="filter" class="form-control mb-2">
                    <option value="">Pilih Kegiatan</option>
                    @php
                        $kegiatans = App\Models\Kegiatan::get();
                    @endphp
                    @foreach ($kegiatans as $kegiatan)
                        <option value="{{ $kegiatan->nama_kegiatan }}">{{ $kegiatan->nama_kegiatan }}</option>
                    @endforeach
                </select>
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Jenis Kegiatan</th>
                            <th>Nomor Whatsapp</th>
                            <th>Asal Instansi</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            var datatable = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: "{!! url()->current() !!}"
                },
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, 'ALL']
                ],
                responsive: true,
                order: [
                    [0, 'desc'],
                ],
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'nama_kegiatan',
                        name: 'nama_kegiatan'
                    },
                    {
                        data: 'no_whatsapp',
                        name: 'no_whatsapp'
                    },
                    {
                        data: 'asal_instansi',
                        name: 'asal_instansi'
                    },
                    {
                        data: 'bukti_pembayaran',
                        name: 'bukti_pembayaran'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                ],
                columnDefs: [{
                    "targets": 1,
                    "render": function(data, type, row, meta) {
                        return `${row.user.name}`;
                    }
                }, {
                    "targets": 2,
                    "render": function(data, type, row, meta) {
                        return `${row.user.email}`;
                    }
                }, {
                    "targets": 6,
                    "render": function(data, type, row, meta) {
                        let img = ``;
                        if (data) {
                            img = `storage/${data}`;
                        }
                        return `<a href="{{ asset('/') }}${img}" target="_blank"><img alt="image" src="{{ asset('/') }}${img}"  width="100"></a>`;
                    }
                }, {
                    "targets": 8,
                    "render": function(data, type, row, meta) {
                        return `
                        <form action="{{ url('/user-pendaftaran/destroy') }}/${row.id}" method="POST" class="table-links">
                            @method('DELETE')
                            @csrf
                            <a
                                href="{{ url('/user-pendaftaran/') }}/${row.id}/edit"
                                class="btn btn-sm"
                            >
                                Edit
                            </a>
                            <button
                                type="submit"
                                class="text-danger btn-delete btn btn-sm"

                            >
                                Delete
                            </button>
                        </form>
                    `;
                    }
                }, {
                    "targets": 7,
                    "render": function(data, type, row, meta) {
                        if (row.status === 'sudah divalidasi') {
                            return `<div class="badge badge-success">${row.status}</div>`;
                        } else {
                            return `<div class="badge badge-danger">${row.status}</div>`;
                        }
                    }
                }],
                rowId: function(a) {
                    return a;
                },
                rowCallback: function(row, data, iDisplayIndex) {
                    var info = this.fnPagingInfo();
                    var page = info.iPage;
                    var length = info.iLength;
                    var index = page * length + (iDisplayIndex + 1);
                    $('td:eq(0)', row).html(index);
                },
            });
            $('#filter').on('change', function() {
                datatable.search(this.value).draw();
            });
        });
    </script>
@endpush()
