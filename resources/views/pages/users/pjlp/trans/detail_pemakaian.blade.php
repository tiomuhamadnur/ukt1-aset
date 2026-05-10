@extends('layouts.base')

@section('title-head')
    <title>
        Transaksi | Detail Pemakaian Aset
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item">Aset</li>
            <li class="breadcrumb-item">Pemakaian</li>
            <li class="breadcrumb-item">List Pemakaian Aset</li>
            <li class="breadcrumb-item active">Detail Pemakaian Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration:underline">
                        Detail Data Pemakaian Aset <br>
                        (No. Pemakaian: PAKAI/UKT1/2026/001)
                    </h4>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 text-left">
                            <div class="d-flex justify-content-start align-items-center flex-wrap">
                                <a href="{{ route('listPemakaian.index') }}"
                                    class="btn btn-outline-primary mr-2 mb-2 mb-sm-0">
                                    <i class="fa fa-arrow-left"></i>
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <form class="form-inline mb-2 d-flex justify-content-end">
                                <input class="form-control mr-sm-2" type="search" placeholder="Cari sesuatu di sini...">
                                <button class="btn btn-dark my-2 my-sm-0" type="submit">
                                    Pencarian
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <p>
                            NOTE: Dokumentasi bersifat opsional.
                        </p>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No.
                                    </th>
                                    <th class="text-center">
                                        Nama Aset
                                    </th>
                                    <th class="text-center">
                                        Qty Dipakai
                                    </th>
                                    <th class="text-center">
                                        Pengguna
                                    </th>
                                    <th class="text-center">
                                        Jabatan
                                    </th>
                                    <th class="text-center">
                                        Keperluan
                                    </th>
                                    <th class="text-center">
                                        Tanggal Pemakaian
                                    </th>
                                    <th class="text-center">
                                        Dokumentasi
                                    </th>
                                    <th class="text-center">
                                        Penanggung Jawab
                                    </th>
                                    <th class="text-center">
                                        Status
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        1
                                    </td>
                                    <td class="text-center">
                                        Laptop ASUS
                                    </td>
                                    <td class="text-center">
                                        2 Unit
                                    </td>
                                    <td class="text-center">
                                        Budi Santoso
                                    </td>
                                    <td class="text-center">
                                        PJLP
                                    </td>
                                    <td class="text-center">
                                        Operasional Kantor
                                    </td>
                                    <td class="text-center">
                                        07-05-2026
                                    </td>
                                    <td class="text-center">
                                        <img src="https://placehold.co/100x100" style="height:70px;" class="img-thumbnail">
                                    </td>
                                    <td class="text-center">
                                        Koordinator Gudang
                                    </td>
                                    <td class="text-center">
                                        <span class="btn btn-primary">
                                            Digunakan
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:;" class="btn btn-outline-primary" data-toggle="modal"
                                            data-target="#modalDokumentasi">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td class="text-center">
                                        Printer Epson
                                    </td>
                                    <td class="text-center">
                                        1 Unit
                                    </td>
                                    <td class="text-center">
                                        Andi Saputra
                                    </td>
                                    <td class="text-center">
                                        PJLP
                                    </td>
                                    <td class="text-center">
                                        Maintenance Lapangan
                                    </td>
                                    <td class="text-center">
                                        06-05-2026
                                    </td>
                                    <td class="text-center">
                                        <img src="https://placehold.co/100x100" style="height:70px;" class="img-thumbnail">
                                    </td>
                                    <td class="text-center">
                                        Admin Aset
                                    </td>
                                    <td class="text-center">
                                        <span class="btn btn-warning">
                                            Dipinjam
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:;" class="btn btn-outline-primary" data-toggle="modal"
                                            data-target="#modalDokumentasi">
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

    {{-- START: MODAL DOKUMENTASI --}}
    <div class="modal fade" id="modalDokumentasi" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Dokumentasi Pemakaian Aset
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div id="sliderDokumentasi" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#sliderDokumentasi" data-slide-to="0" class="active"></li>
                            <li data-target="#sliderDokumentasi" data-slide-to="1"></li>
                            <li data-target="#sliderDokumentasi" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="https://placehold.co/800x400" class="d-block w-100 rounded"
                                    style="height:350px;object-fit:cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://placehold.co/800x400" class="d-block w-100 rounded"
                                    style="height:350px;object-fit:cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://placehold.co/800x400" class="d-block w-100 rounded"
                                    style="height:350px;object-fit:cover;">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- END: MODAL DOKUMENTASI --}}
@endsection
