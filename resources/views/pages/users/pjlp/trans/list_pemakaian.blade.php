@extends('layouts.userbase')

@section('title-head')
    <title>
        Transaksi | List Pemakaian Aset
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item">Aset</li>
            <li class="breadcrumb-item">Pemakaian</li>
            <li class="breadcrumb-item active">List Pemakaian Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration:underline">
                        List Data Pemakaian Aset - Seksi Perpustakaan & Kearsipan
                    </h4>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 text-left">
                            <div class="d-flex justify-content-start align-items-center flex-wrap">
                                <a href="{{ route('pjlp.dashboard') }}" class="btn btn-outline-primary mr-2 mb-2 mb-sm-0">
                                    <i class="fa fa-arrow-left"></i>
                                    Kembali
                                </a>
                                <a href="javascript:;" class="btn btn-primary mr-2 mb-2 mb-sm-0" data-toggle="modal"
                                    data-target="#modalFilter">
                                    <i class="fa fa-filter"></i>
                                </a>
                                <a href="{{ route('listPemakaian.index') }}" class="btn btn-primary mr-2 mb-2 mb-sm-0">
                                    <i class="fa fa-refresh"></i>
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
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No.
                                    </th>
                                    <th class="text-center">
                                        No. Resi Pemakaian
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
                                        Penanggung Jawab
                                    </th>
                                    <th class="text-center">
                                        Catatan
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
                                        PAKAI/UKT1/2026/001
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
                                        Koordinator Gudang
                                    </td>
                                    <td class="text-center">
                                        Digunakan untuk administrasi harian
                                    </td>
                                    <td class="text-center">
                                        <span class="btn btn-primary">
                                            Digunakan
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('detailPemakaian.index') }}" class="btn btn-outline-primary">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td class="text-center">
                                        PAKAI/UKT1/2026/002
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
                                        Admin Aset
                                    </td>
                                    <td class="text-center">
                                        Digunakan untuk pengecekan jaringan
                                    </td>
                                    <td class="text-center">
                                        <span class="btn btn-warning">
                                            Dipinjam
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('detailPemakaian.index') }}" class="btn btn-outline-primary">
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
    {{-- START: MODAL FILTER --}}
    <div class="modal fade" id="modalFilter" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Filter Data Pemakaian
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formFilter">
                        <div class="form-group">
                            <label>Keperluan Pemakaian</label>
                            <select class="form-control">
                                <option selected disabled>
                                    - pilih keperluan -
                                </option>
                                <option>
                                    Operasional Kantor
                                </option>
                                <option>
                                    Maintenance Lapangan
                                </option>
                                <option>
                                    Kegiatan Administrasi
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Periode Pemakaian</label>
                            <div class="form-row gutters">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                        Tutup
                    </button>
                    <button type="button" class="btn btn-primary" id="btnFilterPemakaian">
                        Filter Data
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- END: MODAL FILTER --}}
@endsection
