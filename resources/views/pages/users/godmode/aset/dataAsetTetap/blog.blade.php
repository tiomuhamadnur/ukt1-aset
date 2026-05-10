@extends('layouts.base')

@section('title-head')
    <title>
        Admin | Dashboard Aset Tetap
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item">Aset</li>
            <li class="breadcrumb-item active">Data Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row mb-3">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <h3 class="mb-1">
                        Detail Data Aset Tetap
                    </h3>
                    <p class="text-muted mb-0">
                        Informasi Lengkap Fasilitas & Histori Perbaikan
                    </p>
                </div>
                <div class="mt-2 mt-sm-0">
                    <a href="{{ route('dataAsetTetap.index') }}" class="btn btn-outline-primary">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="row gutters">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="user-details h-320">
                <div class="user-thumb">
                    <img src="https://placehold.co/120x120" alt="Aset Tetap" />
                </div>
                <h4>
                    Gedung Arsip Utama
                </h4>
                <h6>
                    AST-001
                </h6>
                <p>
                    Jl. Perpustakaan No. 12 Jakarta
                </p>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <h5 class="mb-0">
                        Informasi Aset
                    </h5>
                </div>
                <div class="card-body p-2" style="max-height:250px;overflow-y:auto;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm mb-0">
                            <tbody>
                                <tr>
                                    <th width="40%">
                                        Kode Aset
                                    </th>
                                    <td>
                                        AST-001
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Kategori
                                    </th>
                                    <td>
                                        Gedung Arsip
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Kapasitas
                                    </th>
                                    <td>
                                        200 Orang
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Luas Tanah
                                    </th>
                                    <td>
                                        1200 m²
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Luas Bangunan
                                    </th>
                                    <td>
                                        800 m²
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Latitude
                                    </th>
                                    <td>
                                        -6.200000
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Longitude
                                    </th>
                                    <td>
                                        106.816666
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Status
                                    </th>
                                    <td>
                                        <span class="badge badge-primary">
                                            Aktif
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card h-320">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        History Perbaikan Aset
                    </h5>
                    <a href="javascript:;" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCreate">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="card-body p-2" style="max-height:250px;overflow-y:auto;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center" width="20%">
                                        Tanggal
                                    </th>
                                    <th class="text-center" width="25%">
                                        PIC
                                    </th>
                                    <th class="text-center">
                                        Perbaikan
                                    </th>
                                    <th class="text-center" width="15%">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center align-middle">
                                        07-05-2026
                                    </td>
                                    <td class="text-center align-middle">
                                        Budi Santoso
                                    </td>
                                    <td class="align-middle">
                                        Revitalisasi Tahunan
                                    </td>
                                    <td class="text-center align-middle">
                                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                            data-target="#modalDetailPerbaikan">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center align-middle">
                                        12-03-2024
                                    </td>
                                    <td class="text-center align-middle">
                                        Andi Saputra
                                    </td>
                                    <td class="align-middle">
                                        Renovasi Pondasi
                                    </td>
                                    <td class="text-center align-middle">
                                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                            data-target="#modalDetailPerbaikan">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center align-middle">
                                        18-12-2022
                                    </td>
                                    <td class="text-center align-middle">
                                        Rizky Pratama
                                    </td>
                                    <td class="align-middle">
                                        Revitalisasi Tahunan
                                    </td>
                                    <td class="text-center align-middle">
                                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                            data-target="#modalDetailPerbaikan">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">
                        Dokumentasi Aset
                    </h6>
                </div>
                <div class="card-body">
                    <div id="sliderDokumentasi" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#sliderDokumentasi" data-slide-to="0" class="active"></li>
                            <li data-target="#sliderDokumentasi" data-slide-to="1"></li>
                            <li data-target="#sliderDokumentasi" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="https://placehold.co/800x450" class="d-block w-100 rounded"
                                    style="height:350px;object-fit:cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="badge badge-dark">
                                        Gedung Arsip Utama
                                    </span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://placehold.co/800x450" class="d-block w-100 rounded"
                                    style="height:350px;object-fit:cover;">

                                <div class="carousel-caption d-none d-md-block">
                                    <span class="badge badge-dark">
                                        Gedung Arsip Utama
                                    </span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://placehold.co/800x450" class="d-block w-100 rounded"
                                    style="height:350px;object-fit:cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="badge badge-dark">
                                        Testing Setelah Perbaikan
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#sliderDokumentasi" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#sliderDokumentasi" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex">
            <div class="card w-100">
                <div class="card-header">
                    <h6 class="mb-0">
                        Lokasi Aset
                    </h6>
                </div>
                <div class="card-body d-flex flex-column p-2">
                    <div class="flex-grow-1 border rounded overflow-hidden">
                        <iframe src="https://maps.google.com/maps?q=-6.200000,106.816666&z=15&output=embed" width="100%"
                            height="350" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- START: MODAL TAMBAH DATA PERBAIKAN --}}
    <div class="modal fade" id="modalCreate" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <form id="formTambahPerbaikan">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Tambah History Perbaikan Aset
                        </h5>
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th width="35%">
                                                    Kode Aset
                                                </th>
                                                <td>
                                                    AST-001
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Nama Aset
                                                </th>
                                                <td>
                                                    Gedung Arsip Utama
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Tanggal Perbaikan
                                                </th>
                                                <td>
                                                    <input type="date" class="form-control" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    PIC Perbaikan
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukkan nama PIC" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Vendor
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukkan vendor">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Jenis Perbaikan
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        placeholder="Jenis perbaikan" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Biaya
                                                </th>
                                                <td>
                                                    <input type="number" class="form-control"
                                                        placeholder="Biaya perbaikan">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Status
                                                </th>
                                                <td>
                                                    <select class="form-control">
                                                        <option>
                                                            Selesai
                                                        </option>
                                                        <option>
                                                            Diproses
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Keterangan
                                                </th>
                                                <td>
                                                    <textarea class="form-control" rows="4" placeholder="Keterangan perbaikan"></textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">
                                            Upload Dokumentasi
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="preview-container d-flex flex-wrap mb-3"></div>
                                        <input type="file" class="form-control image-input" accept="image/*" multiple>
                                        <small class="text-muted">
                                            Maksimal 5 dokumentasi photo
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- END: MODAL TAMBAH DATA PERBAIKAN --}}


    {{-- START: MODAL DATA PERBAIKAN --}}
    <div class="modal fade" id="modalDetailPerbaikan" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Detail History Perbaikan Aset
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th width="35%">
                                                Kode Aset
                                            </th>
                                            <td>
                                                AST-001
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Nama Aset
                                            </th>
                                            <td>
                                                Gedung Arsip Utama
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Tanggal Perbaikan
                                            </th>
                                            <td>
                                                07-05-2026
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                PIC Perbaikan
                                            </th>
                                            <td>
                                                Budi Santoso
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Vendor
                                            </th>
                                            <td>
                                                CV Teknik Pendingin
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Jenis Perbaikan
                                            </th>
                                            <td>
                                                Perbaikan AC Ruangan Arsip
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Biaya
                                            </th>
                                            <td>
                                                Rp. 1.500.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Status
                                            </th>
                                            <td>
                                                <span class="badge badge-primary">
                                                    Selesai
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Keterangan
                                            </th>
                                            <td>
                                                Dilakukan penggantian freon, pembersihan indoor AC, serta pengecekan
                                                instalasi listrik pendingin.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">
                                        Dokumentasi Perbaikan
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <img src="https://placehold.co/300x200" class="img-thumbnail w-100">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <img src="https://placehold.co/300x200" class="img-thumbnail w-100">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <img src="https://placehold.co/300x200" class="img-thumbnail w-100">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <img src="https://placehold.co/300x200" class="img-thumbnail w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- END: MODAL DATA PERBAIKAN --}}
@endsection

{{-- @push('scripts')
    {{ $dataTable->scripts() }}
@endpush --}}

@section('javascript')
    <script>
        $('.image-input').on('change', function(e) {

            $('.preview-container').html('');

            Array.from(e.target.files).forEach(file => {

                let reader = new FileReader();

                reader.onload = function(event) {

                    $('.preview-container').append(
                        `<img src="${event.target.result}" class="img-thumbnail mr-2 mb-2" style="height:120px;">`
                    );

                }

                reader.readAsDataURL(file);

            });

        });

        $('#formTambahPerbaikan').on('submit', function(e) {

            e.preventDefault();

            $('#modalCreate').modal('hide');

            setTimeout(function() {

                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'History perbaikan berhasil ditambahkan',
                    confirmButtonColor: '#3085d6'
                });

            }, 500);

        });
    </script>
@endsection
