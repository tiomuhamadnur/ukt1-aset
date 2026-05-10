@extends('layouts.userbase')

@section('title-head')
    <title>
        Admin | Dashboard Aset Tetap
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">PJLP</li>
            <li class="breadcrumb-item">Aset</li>
            <li class="breadcrumb-item active">Data Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration: underline">Data
                        Aset Tetap (Fasilitas) - Seksi Perpustakaan & Kearsipan</h4>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 text-left">
                            <div class="d-flex justify-content-start align-items-center flex-wrap">
                                <a href="{{ route('pjlpAset.index') }}" class="btn btn-outline-primary mr-2 mb-2 mb-sm-0"><i
                                        class="fa fa-arrow-left"></i>
                                    Kembali</a>
                                <a href="javascript:;" class="btn btn-primary mr-2 mb-2 mb-sm-0" data-toggle="modal"
                                    data-target="#modalFilter" title="Filter"><i class="fa fa-filter"></i></a>
                                <a href="{{ route('pjlpDataAsetTetap.index') }}" class="btn btn-primary mr-2 mb-2 mb-sm-0"
                                    title="Reset Filter">
                                    <i class="fa fa-refresh"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row container">
                        <p><span class="font-weight-bolder">Note:</span> Dokumentasi Opsional.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Kode Aset</th>
                                    <th class="text-center">Nama Aset</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Koordinat</th>
                                    <th class="text-center">Kapasitas</th>
                                    <th class="text-center">Luas Tanah</th>
                                    <th class="text-center">Luas Bangunan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        07-05-2026
                                    </td>
                                    <td class="text-center">
                                        AST-001
                                    </td>
                                    <td class="text-center font-weight-bolder">
                                        Gedung Arsip Utama
                                    </td>
                                    <td class="text-center">
                                        Gedung penyimpanan arsip & dokumen
                                    </td>
                                    <td class="text-center text-wrap">
                                        Jl. Perpustakaan No. 12 Jakarta
                                    </td>
                                    <td class="text-center">
                                        -6.200000 <br>
                                        106.816666
                                    </td>
                                    <td class="text-center">
                                        200 Orang
                                    </td>
                                    <td class="text-center">
                                        1200 m²
                                    </td>
                                    <td class="text-center">
                                        800 m²
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pjlpDetailAsetTetap.index') }}">
                                            <button class="btn btn-sm btn-primary" title="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="table-responsive">
                        <form id="form-kirim" action="#" method="GET">
                            @csrf
                            @method('GET')
                            {{ $dataTable->table([
                                'class' => 'table table-bordered table-striped',
                            ]) }}
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- END: MODAL CREATE --}}
    <div class="modal fade" id="modalCreate" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <form id="formCreate" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Form Tambah Data Aset</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">

                        <div class="form-group">
                            <label>Seksi</label>
                            <input type="hidden" value="1">
                            <select class="form-control" disabled>
                                <option selected>PUSIP/PORA/SOS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Masukkan Nama Kontrak <span class="text-danger">(Opsional)</span></label>
                            <select class="form-control" required>
                                <option selected disabled>- pilih kontrak -</option>
                                <option>2026 - Pengadaan Laptop</option>
                                <option>2026 - Pengadaan Printer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Import List Data Aset Pengadaan <span class="text-danger">(Harus dalam format
                                    Excel)</span></label>

                            <div class="container my-2">
                                <a href="#" class="btn btn-outline-primary">
                                    <img style="height:30px;"
                                        src="https://i.pinimg.com/originals/1b/db/8a/1bdb8ac897512116cbac58ffe7560d82.png">
                                    <span class="text-dark font-weight-bolder"> Download Contoh Format File Excel</span>
                                </a>
                            </div>

                            <input type="file" class="form-control" accept=".xls,.xlsx" required>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{-- END: MODAL CREATE --}}

    {{-- START: MODAL EDIT --}}
    <div class="modal fade" id="modalEdit" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <form id="formEdit" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Form Edit Data Aset
                        </h5>
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Aset</label>
                                    <input type="text" class="form-control" value="Gedung Arsip Utama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Aset</label>
                                    <input type="text" class="form-control" value="AST-001">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3">Gedung penyimpanan arsip & dokumen</textarea>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="3">Jl. Perpustakaan No. 12 Jakarta</textarea>
                        </div>
                        <div class="form-row gutters justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" value="-6.200000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" value="106.816666">
                                </div>
                            </div>
                            <div class="col-md-8 mt-2">
                                <div class="form-group">
                                    <label>Maps Lokasi</label>
                                    <div class="border rounded overflow-hidden">
                                        <iframe src="https://maps.google.com/maps?q=-6.200000,106.816666&z=15&output=embed"
                                            width="100%" height="300" style="border:0;" allowfullscreen=""
                                            loading="lazy">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row gutters">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kapasitas</label>
                                    <input type="number" class="form-control" value="200">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Luas Tanah (m²)</label>
                                    <input type="number" class="form-control" value="1200">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Luas Bangunan (m²)</label>
                                    <input type="number" class="form-control" value="800">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                Dokumentasi Aset
                            </label>
                            <div class="d-flex flex-wrap mb-3">
                                <img src="https://placehold.co/100x100" width="100"
                                    class="img-thumbnail mr-2 mb-2 border">
                                <img src="https://placehold.co/100x100" width="100"
                                    class="img-thumbnail mr-2 mb-2 border">
                            </div>
                            <input type="file" class="form-control" accept="image/*" multiple>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
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

    {{-- BEGIN: MODAL FILTER --}}
    <div class="modal fade" id="modalFilter" tabindex="-1" role="dialog" aria-labelledby="modalFilter"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="#" method="GET">
                @csrf
                @method('GET')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Filter Data Aset</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <select class="form-control">
                                        <option selected disabled>- pilih lokasi aset -</option>
                                        <option>
                                            Pulau Untung Jawa
                                        </option>
                                        <option>
                                            Pulau Sebria
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" id="btnFilter">Filter Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- END: MODAL FILTER --}}
@endsection

{{-- @push('scripts')
    {{ $dataTable->scripts() }}
@endpush --}}

@section('javascript')
    <script>
        // ==============UPDATE
        $('#formEdit').on('submit', function(e) {
            e.preventDefault();
            $('#modalEdit').modal('hide');
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Aset berhasil diupdate',
                confirmButtonColor: '#3085d6'
            });
        });
        // ==============DELETE
        function deleteData() {
            $('#delete-confirmation-modal').modal('hide');
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil dihapus',
                confirmButtonColor: '#3085d6'
            });
        }
        // =============FILTER
        $('#btnFilter').on('click', function() {

            $('#modalFilter').modal('hide');

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil difilter',
                confirmButtonColor: '#3085d6'
            });

        });
    </script>
@endsection
