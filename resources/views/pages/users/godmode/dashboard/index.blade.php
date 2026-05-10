@extends('layouts.base')

@section('title-head')
    <title>
        Admin Dashboard | UKT1.ORG Kep. Seribu
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
@endsection

@section('content')
    {{-- SUMMARY --}}
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="#">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="fa fa-boxes"></i>
                    </div>
                    <div class="sale-num">
                        <h4>
                            1.240
                        </h4>
                        <p>
                            Total Aset Terdaftar
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="#">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="fa fa-paper-plane"></i>
                    </div>
                    <div class="sale-num">
                        <h4>
                            124
                        </h4>
                        <p>
                            Total Pengiriman Aset
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="#">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <div class="sale-num">
                        <h4>
                            98
                        </h4>
                        <p>
                            Aset Sudah Diterima
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="#">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="fa fa-tools"></i>
                    </div>
                    <div class="sale-num">
                        <h4>
                            32
                        </h4>
                        <p>
                            Aset Maintenance
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Pintasan Sistem
                    </div>
                    <p>
                        Akses cepat menu utama aplikasi aset.
                    </p>
                </div>
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('kontrak.index') }}" style="text-decoration:none;">
                                <div class="launch-box h-180">
                                    <h3>
                                        Kontrak
                                    </h3>
                                    <i class="fa fa-file-contract"></i>
                                    <p>
                                        Kelola data kontrak pengadaan aset
                                    </p>
                                    <h5>
                                        Buka Menu
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('dataAset.index') }}" style="text-decoration:none;">
                                <div class="launch-box h-180">
                                    <h3>
                                        Data Aset
                                    </h3>
                                    <i class="fa fa-box-open"></i>
                                    <p>
                                        Monitoring aset habis pakai & modal
                                    </p>
                                    <h5>
                                        Buka Menu
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('listPengiriman.index') }}" style="text-decoration:none;">
                                <div class="launch-box h-180">
                                    <h3>
                                        Histori Transaksi Aset
                                    </h3>
                                    <i class="fa fa-shipping-fast"></i>
                                    <p>
                                        Distribusi aset ke pulau & lokasi
                                    </p>
                                    <h5>
                                        Buka Menu
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('monitoringAset.index') }}" style="text-decoration:none;">
                                <div class="launch-box h-180">
                                    <h3>
                                        Monitoring
                                    </h3>
                                    <i class="fa fa-map-marked-alt"></i>
                                    <p>
                                        Pantau aset tersebar seluruh pulau
                                    </p>
                                    <h5>
                                        Buka Menu
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">
                        Distribusi Aset per Pulau
                    </div>
                    <p>
                        Monitoring jumlah aset tersebar.
                    </p>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive" style="max-height:420px;overflow-y:auto;">
                        <table class="table table-bordered table-striped mb-0">
                            <thead style="position:sticky;top:0;background:#fff;z-index:10;">
                                <tr>
                                    <th class="text-center">
                                        Pulau
                                    </th>
                                    <th class="text-center">
                                        Lokasi
                                    </th>
                                    <th class="text-center">
                                        Total Aset
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <td class="text-center">
                                            Pulau Harapan
                                        </td>
                                        <td class="text-center">
                                            SKKT Pulau Harapan
                                        </td>
                                        <td class="text-center">
                                            {{ rand(50, 150) }}
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-primary p-2">
                                                Lihat Data
                                            </span>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">
                        List Transaksi / Distribusi Terbaru
                    </div>
                    <p>
                        Data Pengiriman Aset Terbaru
                    </p>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive" style="max-height:420px;overflow-y:auto;">
                        <table class="table table-bordered table-striped mb-0">
                            <thead style="position:sticky;top:0;background:#fff;z-index:10;">
                                <tr>
                                    <th class="text-center">
                                        Pulau
                                    </th>
                                    <th class="text-center">
                                        Lokasi
                                    </th>
                                    <th class="text-center">
                                        Total Aset
                                    </th>
                                    <th class="text-center">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <td class="text-center">
                                            Pulau Sebira
                                        </td>
                                        <td class="text-center">
                                            Perpustakaan Pulau Sebira
                                        </td>
                                        <td class="text-center">
                                            {{ rand(10, 80) }}
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-success p-2">
                                                Diterima
                                            </span>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
