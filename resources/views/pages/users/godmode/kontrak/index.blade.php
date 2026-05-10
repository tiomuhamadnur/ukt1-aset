@extends('layouts.base')

@section('title-head')
    <title>
        Admin | Kontrak
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item">Kontrak</li>
            <li class="breadcrumb-item active">Daftar Kontrak</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration: underline">
                        Daftar Kontrak UKT 1 - Seksi PUSIP/PORA/SOS
                    </h4>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 text-left">
                            <div class="d-flex justify-content-start align-items-center flex-wrap">
                                <a href="{{ route('godmode.dashbboard') }}"
                                    class="btn btn-outline-primary mr-2 mb-2 mb-sm-0"><i class="fa fa-arrow-left"></i>
                                    Kembali</a>
                                <a href="#" data-toggle="modal" data-target="#modalCreate"
                                    class="btn btn-primary mr-2 mb-2 mb-sm-0">Tambah Data</a>
                                <a href="javascript:;" class="btn btn-primary mr-2 mb-2 mb-sm-0" data-toggle="modal"
                                    data-target="#modalFilter" title="Filter"><i class="fa fa-filter"></i></a>
                                <a href="{{ route('kontrak.index') }}" class="btn btn-primary mr-2 mb-2 mb-sm-0"
                                    title="Reset Filter">
                                    <i class="fa fa-refresh"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Nama Kontrak</th>
                                    <th class="text-center">No. Kontrak</th>
                                    <th class="text-center">Nilai Kontrak</th>
                                    <th class="text-center">Seksi</th>
                                    <th class="text-center">Tanggal Pengadaan</th>
                                    <th class="text-center">Dokumen Kontrak</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        Pengadaan Laptop 2026
                                    </td>

                                    <td class="text-center">
                                        KONTRAK/001/UKT1/2026
                                    </td>

                                    <td class="text-center">
                                        Rp. 25.000.000
                                    </td>

                                    <td class="text-center">
                                        PUSIP/PORA/SOS
                                    </td>

                                    <td class="text-center">
                                        07 Mei 2026
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ asset('assets/format/contohkontrak.pdf') }}" target="_blank">
                                            <i class="fa fa-file-pdf text-danger" style="font-size: 20px;">
                                            </i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEdit"
                                            onclick="setEditData(
                                                'uuid-dummy',
                                                'PUSIP/PORA/SOS',
                                                'Pengadaan Laptop 2026',
                                                'KONTRAK/001/UKT1/2026',
                                                '25000000',
                                                '2026-05-07'
                                            )">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#delete-confirmation-modal">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- START: MODAL CREATE --}}
    <div class="modal fade" id="modalCreate" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <form id="formKontrak" action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Form Tambah Data Kontrak</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">

                        <input type="hidden" name="seksi_id" value="#">

                        <div class="form-group">
                            <label>Seksi</label>
                            <input type="text" class="form-control" value="PUSIP/PORA/SOS" disabled>
                        </div>

                        <div class="form-group">
                            <label>Nama Kontrak</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>No. Kontrak</label>
                            <input type="text" class="form-control" name="no_kontrak" required>
                        </div>

                        <div class="form-group">
                            <label>Nilai Kontrak (Rp.)</label>
                            <input type="number" class="form-control" name="nilai_kontrak" min="0" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>

                        <div class="form-group">
                            <label>Dokumen Kontrak <span class="text-info">(opsional)</span> <br>
                                <span class="text-danger">(PDF
                                    Max:
                                    10MB)</span></label>
                            <input type="file" class="form-control" name="lampiran" accept="application/pdf">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                        <button type="submit" id="submitBtn" class="btn btn-primary">
                            Submit
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{-- END: MODAL CREATE --}}

    {{-- START: MODAL EDIT --}}
    <div class="modal fade" id="modalEdit" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <form method="POST" id="formEdit" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Form Ubah Data Kontrak</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Seksi</label>
                            <input type="text" id="edit_seksi" class="form-control" disabled>
                        </div>

                        <div class="form-group">
                            <label>Nama Kontrak</label>
                            <input type="text" id="edit_name" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>No. Kontrak</label>
                            <input type="text" id="edit_no_kontrak" name="no_kontrak" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Nilai Kontrak (Rp.)</label>
                            <input type="number" id="edit_nilai_kontrak" name="nilai_kontrak" class="form-control"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" id="edit_tanggal" name="tanggal" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Dokumen Kontrak <span class="text-info">(opsional)</span></label>
                            <input type="file" name="lampiran" class="form-control" accept="application/pdf">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- END: MODAL EDIT --}}

    <!-- START: MODAL DELETE CONFIRMATION -->
    <div id="delete-confirmation-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="fa fa-trash text-danger mb-3" style="font-size: 50px;">
                        </i>
                        <h4>
                            Apakah anda yakin?
                        </h4>
                        <p class="text-muted mt-2">
                            Peringatan: Data ini akan dihapus secara permanent
                        </p>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" class="btn btn-danger" onclick="deleteData()">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: MODAL DELETE CONFIRMATION -->

    {{-- START: MODAL FILTER --}}
    <div class="modal fade" id="modalFilter" tabindex="-1" role="dialog" aria-labelledby="modalFilter"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter Data Kontrak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formFilter" action="#" method="GET">
                        <label for="periode">Periode Kontrak</label>
                        <div class="form-row gutters">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" value="#" name="start_date">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" value="#" name="end_date">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="formFilter" class="btn btn-primary">Filter Data</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END: MODAL FILTER --}}
@endsection

{{-- @push('scripts')
    {{ $dataTable->scripts() }}
@endpush --}}

@section('javascript')
    <script>
        $('#formKontrak').on('submit', function(e) {

            e.preventDefault();

            $('#modalCreate').modal('hide');

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Kontrak berhasil ditambahkan!',
                confirmButtonColor: '#3085d6'
            });

        });

        function setEditData(
            uuid,
            seksi,
            name,
            noKontrak,
            nilaiKontrak,
            tanggal
        ) {

            $('#edit_uuid').val(uuid);
            $('#edit_seksi').val(seksi);
            $('#edit_name').val(name);
            $('#edit_no_kontrak').val(noKontrak);
            $('#edit_nilai_kontrak').val(nilaiKontrak);
            $('#edit_tanggal').val(tanggal);

        }

        $('#formEdit').on('submit', function(e) {

            e.preventDefault();

            $('#modalEdit').modal('hide');

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Kontrak berhasil diperbaharui!',
                confirmButtonColor: '#3085d6'
            });

        });

        $('#formFilter').on('submit', function(e) {

            e.preventDefault();

            $('#modalFilter').modal('hide');

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Berhasil Difilter!',
                confirmButtonColor: '#3085d6'
            });

        });

        function deleteData() {

            $('#delete-confirmation-modal').modal('hide');

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil dihapus',
                confirmButtonColor: '#3085d6'
            });

        }
    </script>
@endsection
