@extends('layouts.base')

@section('title-head')
    <title>
        Transaksi | Detail Penerimaan Aset
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item">Aset</li>
            <li class="breadcrumb-item">Pengiriman</li>
            <li class="breadcrumb-item">List Pengiriman Aset</li>
            <li class="breadcrumb-item active">Detail Pengiriman Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration:underline">
                        Detail Data Penerimaan Aset (No. Resi: RESI/UKT1/2026/001)
                    </h4>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 text-left">
                            <div class="d-flex justify-content-start align-items-center flex-wrap">
                                <a href="{{ route('listPengiriman.index') }}"
                                    class="btn btn-outline-primary mr-2 mb-2 mb-sm-0">
                                    <i class="fa fa-arrow-left"></i>
                                    Kembali
                                </a>
                                <a href="javascript:;" class="btn btn-primary mr-2 mb-2 mb-sm-0" data-toggle="modal"
                                    data-target="#generateBAST">
                                    <i class="fa fa-print"></i>
                                    Generate Surat BAST
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
                            NOTE: Dokumentasi Opsional.
                        </p>
                        <form id="formTerima">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama Aset</th>
                                        <th class="text-center">Qty.</th>
                                        <th class="text-center">Asal</th>
                                        <th class="text-center">Tujuan</th>
                                        <th class="text-center">Pengirim</th>
                                        <th class="text-center">Tanggal Kirim</th>
                                        <th class="text-center">Photo Kirim</th>
                                        <th class="text-center">Penerima</th>
                                        <th class="text-center">Tanggal Terima</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            Laptop ASUS
                                        </td>
                                        <td class="text-center">
                                            2 Unit
                                        </td>
                                        <td class="text-center">
                                            Gudang Utama
                                        </td>
                                        <td class="text-center">
                                            Gudang Jawa
                                        </td>
                                        <td class="text-center">
                                            Budi Santoso
                                        </td>
                                        <td class="text-center">
                                            07-05-2026
                                        </td>
                                        <td class="text-center">
                                            <img src="https://placehold.co/100x100" style="height:70px;"
                                                class="img-thumbnail">
                                        </td>
                                        <td class="text-center">
                                            Andi Saputra
                                        </td>
                                        <td class="text-center">
                                            08-05-2026
                                        </td>
                                        <td class="text-center">
                                            Dikirim
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">
                                            Printer Epson
                                        </td>
                                        <td class="text-center">
                                            1 Unit
                                        </td>
                                        <td class="text-center">
                                            Gudang Utama
                                        </td>
                                        <td class="text-center">
                                            Gudang Sumatera
                                        </td>
                                        <td class="text-center">
                                            Budi Santoso
                                        </td>
                                        <td class="text-center">
                                            06-05-2026
                                        </td>
                                        <td class="text-center">
                                            <img src="https://placehold.co/100x100" style="height:70px;"
                                                class="img-thumbnail">
                                        </td>
                                        <td class="text-center">
                                            Andi Saputra
                                        </td>
                                        <td class="text-center">
                                            08-05-2026
                                        </td>
                                        <td class="text-center">
                                            Dikirim
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- START: BAST Eksternal --}}
    <div id="generateBAST" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="fa fa-print text-primary mb-3" style="font-size:50px;"></i>
                        <h4>
                            Apakah anda yakin?
                        </h4>
                        <p class="text-muted mt-2">
                            Berita Acara Serah Terima (BAST) akan dibuat sesuai dengan data yang ditampilkan.
                        </p>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" class="btn btn-primary" id="btnGenerateBAST">
                            Buat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END: BAST Eksternal --}}
@endsection

@section('javascript')
    <script>
        $('#btnGenerateBAST').on('click', function() {

            window.open('{{ asset('assets/format/contohbastinternal.pdf') }}', '_blank');

            $('#generateBAST').modal('hide');

        });
    </script>
@endsection
