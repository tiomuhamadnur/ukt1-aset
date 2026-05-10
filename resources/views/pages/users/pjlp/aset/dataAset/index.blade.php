@extends('layouts.userbase')

@section('title-head')
    <title>
        PJLP | Dashboard Aset
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
                        Aset Habis Pakai / Belanja Modal - Seksi Perpustakaan & Kearsipan</h4>
                    <div class="row gutters mb-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="border rounded p-3 bg-light h-100">
                                <h6 class="text-muted mb-2">
                                    Pulau / Lokasi
                                </h6>
                                <h4 class="font-weight-bolder mb-0">
                                    Pulau Harapan
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="border rounded p-3 bg-light h-100">
                                <h6 class="text-muted mb-2">
                                    Detail Lokasi Aset
                                </h6>
                                <h4 class="font-weight-bolder mb-0">
                                    SKKT Pulau Harapan
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="border rounded p-3 bg-light h-100">
                                <h6 class="text-muted mb-2">
                                    Total Aset Lokasi
                                </h6>
                                <h4 class="font-weight-bolder text-primary mb-0">
                                    24 Aset
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 text-left">
                            <div class="d-flex justify-content-start align-items-center flex-wrap">
                                <a href="{{ route('pjlpAset.index') }}" class="btn btn-outline-primary mr-2 mb-2 mb-sm-0"><i
                                        class="fa fa-arrow-left"></i>
                                    Kembali</a>
                                <a href="javascript:;" class="btn btn-primary mr-2 mb-2 mb-sm-0" data-toggle="modal"
                                    data-target="#modalFilter" title="Filter"><i class="fa fa-filter"></i></a>
                                <a href="{{ route('pjlpDataAset.index') }}" class="btn btn-primary mr-2 mb-2 mb-sm-0"
                                    title="Reset Filter">
                                    <i class="fa fa-refresh"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row container">
                        <p><span class="font-weight-bolder">Note:</span> Data Aset ini merupakan data aset yang menjadi
                            tanggungjawab setiap Personel lapangan. <br> <b>Mohon informasikan kepada Admin apabila terdapat
                            ketidaksesuaian data sistem & data lapangan.</b></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    {{-- <th class="text-center">
                                        Pilih <br>
                                        <input type="checkbox" class="aset-checkbox" id="checkAll">
                                    </th> --}}
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">No. Kontrak</th>
                                    <th class="text-center">Seksi</th>
                                    <th class="text-center">Nama Aset</th>
                                    <th class="text-center">Merk Aset</th>
                                    <th class="text-center">Harga <br> (Termasuk PPN)</th>
                                    <th class="text-center">Stock Awal</th>
                                    <th class="text-center">Stock Aktual</th>
                                    <th class="text-center">Harga Aset</th>
                                    <th class="text-center">Spesifikasi Aset</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    {{-- <td class="text-center">
                                        <input type="checkbox" class="aset-checkbox" name="aset_id[]" value="1">
                                    </td> --}}
                                    <td class="text-center">
                                        07-05-2026
                                    </td>
                                    <td class="text-center">
                                        KONTRAK/001/UKT1/2026
                                    </td>
                                    <td class="text-center">
                                        PUSIP/PORA/SOS
                                    </td>
                                    <td class="text-center font-weight-bolder">
                                        Laptop ASUS <br>
                                        ( BRG-001)
                                    </td>
                                    <td class="text-center">
                                        ASUS
                                    </td>
                                    <td class="text-center">
                                        Rp. 12.000.000
                                    </td>
                                    <td class="text-center">
                                        10 Unit
                                    </td>
                                    <td class="text-center">
                                        8 Unit
                                    </td>
                                    <td class="text-center">
                                        Rp.12.000.000
                                    </td>
                                    <td class="text-center">
                                        Intel i7 / RAM 16GB / SSD 512GB
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modalDetail">
                                            <i class="fa fa-eye"></i>
                                        </button>
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


    {{-- START: MODAL DETAIL --}}
    <div class="modal fade" id="modalDetail" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Detail Data Aset
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kontrak Pengadaan</label>
                        <input type="text" class="form-control" value="Pengadaan Aset IT (07-05-2026)" readonly>
                    </div>
                    <div class="form-row gutters">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Aset</label>
                                <input type="text" class="form-control" value="Laptop ASUS" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Aset</label>
                                <input type="text" class="form-control" value="Tools" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-row gutters">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Aset</label>
                                <input type="text" class="form-control" value="BRG-001" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Merk Aset</label>
                                <input type="text" class="form-control" value="ASUS" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-row gutters">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Stock Awal</label>
                                <input type="text" class="form-control" value="10" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Stock Aktual</label>
                                <input type="text" class="form-control" value="8" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Satuan Aset</label>
                                <input type="text" class="form-control" value="Unit" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-row gutters">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Aset (Rp.)</label>
                                <input type="text" class="form-control" value="12000000" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Spesifikasi</label>
                                <input type="text" class="form-control" value="Intel i7 / RAM 16GB / SSD 512GB"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            Dokumentasi Aset
                        </label>
                        <div id="sliderDokumentasiAset" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#sliderDokumentasiAset" data-slide-to="0" class="active"></li>
                                <li data-target="#sliderDokumentasiAset" data-slide-to="1"></li>
                                <li data-target="#sliderDokumentasiAset" data-slide-to="2"></li>
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
                            <a class="carousel-control-prev" href="#sliderDokumentasiAset" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#sliderDokumentasiAset" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
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
    {{-- END: MODAL DETAIL --}}

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
                                    <label>Kontrak</label>
                                    <select class="form-control">
                                        <option selected disabled>- pilih kontrak -</option>
                                        <option>
                                            2026 - Pengadaan Laptop - (KONTRAK/001/UKT1/2026)
                                        </option>
                                        <option>
                                            2026 - Pengadaan Printer - (KONTRAK/002/UKT1/2026)
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Periode</label>
                                    <div class="form-row gutters">
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <input type="date" class="form-control" value="2026-01-01">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <input type="date" class="form-control" value="2026-12-31">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Ketersediaan</label>
                                            <select class="form-control">
                                                <option selected>- pilih ketersediaan stock -</option>
                                                <option>Ada</option>
                                                <option>Habis</option>
                                            </select>
                                        </div>
                                    </div>
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
    <script type="text/javascript">
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

        // ============
        function togglePakaiButton() {
            let checked = $('.aset-checkbox:checked')
                .not('#checkAll')
                .length;
            if (checked > 0) {
                $('#pakaiAsetButton').show();
            } else {
                $('#pakaiAsetButton').hide();
            }
        }

        $('#checkAll').on('change', function() {
            $('.aset-checkbox')
                .not(this)
                .prop('checked', $(this).prop('checked'));
            togglePakaiButton();
        });

        $('.aset-checkbox')
            .not('#checkAll')
            .on('change', function() {
                togglePakaiButton();
            });

        $('#pakaiAsetButton').on('click', function() {

            window.location.href = '{{ route('pemakaian.index') }}';

        });
    </script>
@endsection
