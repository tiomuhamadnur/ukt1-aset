@extends('layouts.base')

@section('title-head')
    <title>
        Transaksi | List Penerimaan Aset
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                User
            </li>
            <li class="breadcrumb-item">
                Aset
            </li>
            <li class="breadcrumb-item">
                Penerimaan
            </li>
            <li class="breadcrumb-item active">
                List Penerimaan Aset
            </li>
        </ol>

    </div>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration:underline">
                        List Penerimaan Aset
                        - Seksi Perpustakaan & Kearsipan
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
                                <a href="#" class="btn btn-primary mr-2 mb-2 mb-sm-0">
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
                                        No. Resi
                                    </th>
                                    <th class="text-center">
                                        Pengirim
                                    </th>
                                    <th class="text-center">
                                        Asal Gudang
                                    </th>
                                    <th class="text-center">
                                        Tujuan Gudang
                                    </th>
                                    <th class="text-center">
                                        Tanggal Kirim
                                    </th>
                                    <th class="text-center">
                                        Jumlah Item
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
                                    <td class="text-center font-weight-bolder">
                                        RESI/UKT1/2026/001
                                    </td>
                                    <td class="text-center">
                                        Budi Santoso
                                    </td>
                                    <td class="text-center">
                                        Gudang Utama
                                    </td>
                                    <td class="text-center">
                                        Gudang Jawa
                                    </td>
                                    <td class="text-center">
                                        07-05-2026
                                    </td>
                                    <td class="text-center">
                                        2 Barang
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-warning p-2">
                                            Menunggu Penerimaan
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('detailPenerimaan.index') }}" class="btn btn-primary">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td class="text-center font-weight-bolder">
                                        RESI/UKT1/2026/002
                                    </td>
                                    <td class="text-center">
                                        Admin Gudang
                                    </td>
                                    <td class="text-center">
                                        Gudang Utama
                                    </td>
                                    <td class="text-center">
                                        Gudang Sumatera
                                    </td>
                                    <td class="text-center">
                                        06-05-2026
                                    </td>
                                    <td class="text-center">
                                        1 Barang
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-success p-2">
                                            Sudah Diterima
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-outline-primary">
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
                        Filter Data Penerimaan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formFilter">
                        <div class="form-group">
                            <label>Status Penerimaan</label>
                            <select class="form-control">
                                <option selected disabled>
                                    - pilih status -
                                </option>
                                <option>
                                    Menunggu Penerimaan
                                </option>
                                <option>
                                    Sudah Diterima
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Periode Pengiriman</label>
                            <div class="form-row gutters">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
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
                    <button type="button" class="btn btn-primary" id="btnFilterPenerimaan">
                        Filter Data
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- END: MODAL FILTER --}}
@endsection
