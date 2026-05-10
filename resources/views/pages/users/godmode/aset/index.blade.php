@extends('layouts.base')

@section('title-head')
    <title>
        Admin | Aset
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters d-flex justify-content-center align-item-center">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration: underline">
                        Aset Manajamen - Seksi Perpustakaan & Kearsipan
                    </h4>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('dataAset.index') }}" style="text-decoration: none; color: inherit;">
                                <div class="launch-box h-180">
                                    <h3>Aset Habis Pakai / Belanja Modal</h3>
                                    <i class="fa fa-folder"></i>
                                    <p>Data Aset Bergerak</p>
                                    <h3>Lihat Data</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('dataAsetTetap.index') }}" style="text-decoration: none; color: inherit;">
                                <div class="launch-box h-180">
                                    <h3>Aset Tetap (Fasilitas)</h3>
                                    <i class="fa fa-folder"></i>
                                    <p>Data Aset Tetap (Fasilitas)</p>
                                    <h3>Lihat Daftar</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @media (max-width: 576px) {
            h3 {
                font-size: 15px;
            }
        }
    </style>
@endsection
