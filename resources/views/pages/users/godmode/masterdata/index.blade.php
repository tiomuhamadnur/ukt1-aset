@extends('layouts.base')

@section('title-head')
    <title>
        Admin | Data Essentials
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item Active">Masterdata</li>
        </ol>
    </div>
@endsection

@section('content')
    {{-- INFRASTRUCTURE --}}
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h5>Infrastructure</h5>
        </div>
    </div>

    <div class="row gutters">

        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="#">
                <div class="info-tiles">
                    <div class="info-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>

                    <div class="stats-detail">
                        <h5>Pulse</h5>
                        <p>Performance App</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="#">
                <div class="info-tiles">
                    <div class="info-icon">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>

                    <div class="stats-detail">
                        <h5>Log Viewer</h5>
                        <p>Detail Debug App</p>
                    </div>
                </div>
            </a>
        </div>

    </div>

    {{-- MASTERDATA ESSENTIALS --}}
    <div class="row gutters mt-4">
        <div class="col-12">
            <h5>Masterdata Essentials</h5>
        </div>
    </div>

    <div class="row gutters">

        @php
            $masterdata = [
                'Users',
                'Provinsi',
                'Kota',
                'Kecamatan',
                'Kelurahan',
                'Pulau',
                'Unit Kerja',
                'Seksi',
                'Rumpun',
                'Gender',
                'User Type',
                'Jabatan',
                'Jenis Cuti',
                'Status Cuti',
                'Status Absensi',
                'Jenis Absensi',
                'Permissions',
                'Roles',
            ];
        @endphp

        @foreach ($masterdata as $item)
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                <a href="#">
                    <div class="info-tiles">

                        <div class="info-icon">
                            <i class="fa fa-database"></i>
                        </div>

                        <div class="stats-detail">
                            <h3>0</h3>
                            <p>{{ $item }}</p>
                        </div>

                    </div>
                </a>
            </div>
        @endforeach

    </div>

    {{-- MASTERDATA SIGMA --}}
    <div class="row gutters mt-4">
        <div class="col-12">
            <h5>Masterdata SIGMA</h5>
        </div>
    </div>

    <div class="row gutters">

        @php
            $sigma = ['Formasi Tim', 'Kegiatan', 'Konfigurasi Cuti', 'Konfigurasi Absensi'];
        @endphp

        @foreach ($sigma as $item)
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                <a href="#">
                    <div class="info-tiles">

                        <div class="info-icon">
                            <i class="fa fa-database"></i>
                        </div>

                        <div class="stats-detail">
                            <h3>0</h3>
                            <p>{{ $item }}</p>
                        </div>

                    </div>
                </a>
            </div>
        @endforeach

    </div>

    {{-- MASTERDATA ASET --}}
    <div class="row gutters mt-4">
        <div class="col-12">
            <h5>Masterdata ASET</h5>
        </div>
    </div>

    <div class="row gutters">

        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="#">
                <div class="info-tiles">

                    <div class="info-icon">
                        <i class="fa fa-database"></i>
                    </div>

                    <div class="stats-detail">
                        <h3>0</h3>
                        <p>Jenis Aset</p>
                    </div>

                </div>
            </a>
        </div>

    </div>
@endsection
