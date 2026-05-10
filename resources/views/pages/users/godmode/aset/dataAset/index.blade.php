@extends('layouts.base')

@section('title-head')
    <title>
        Admin | Dashboard Aset
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
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center mb-3 text-center" style="text-decoration: underline">Data
                        Aset Habis Pakai / Belanja Modal - Seksi Perpustakaan & Kearsipan</h4>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 text-left">
                            <div class="d-flex justify-content-start align-items-center flex-wrap">
                                <a href="{{ route('aset.index') }}" class="btn btn-outline-primary mr-2 mb-2 mb-sm-0"><i
                                        class="fa fa-arrow-left"></i>
                                    Kembali</a>
                                <a href="#" class="btn btn-primary mr-2 mb-2 mb-sm-0" data-toggle="modal"
                                    data-target="#modalCreate">Tambah Aset</a>
                                <button type="submit" form="form-kirim" id="kirimAsetButton"
                                    class="btn btn-secondary mr-2 mb-2 mb-sm-0" style="display:none;">
                                    <i class="fa fa-paper-plane"></i>
                                    Kirim Aset
                                </button>
                                <a href="javascript:;" class="btn btn-primary mr-2 mb-2 mb-sm-0" data-toggle="modal"
                                    data-target="#modalFilter" title="Filter"><i class="fa fa-filter"></i></a>
                                <a href="{{ route('dataAset.index') }}" class="btn btn-primary mr-2 mb-2 mb-sm-0"
                                    title="Reset Filter">
                                    <i class="fa fa-refresh"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row container">
                        <p><span class="font-weight-bolder">Note:</span> Data Aset pada halaman ini merupakan list data aset
                            yang sudah terinput ke dalam sistem <b>tetapi belum didistribusikan ke tempat / lokasi tujuan.
                            </b>.
                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">
                                        Pilih <br>
                                        <input type="checkbox" class="aset-checkbox" id="checkAll">
                                    </th>
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
                                {{-- DATA 1 --}}
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <input type="checkbox" class="aset-checkbox" name="aset_id[]" value="1">
                                    </td>
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
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary" title="Edit" data-toggle="modal"
                                            data-target="#modalEdit"
                                            onclick="setEditData(
                                                    'Laptop ASUS',
                                                    'ASUS',
                                                    'Elektronik',
                                                    '12000000',
                                                    'BRG-001',
                                                    '10',
                                                    '8'
                                                )">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#delete-confirmation-modal">
                                            <i class="fa fa-trash"></i>
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
                            <label>Masukkan Nama Kontrak</label>
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
                        <div class="form-group">
                            <label>Kontrak Pengadaan</label>
                            <input type="text" class="form-control" value="Pengadaan Aset IT (07-05-2026)" disabled>
                        </div>
                        {{-- ROW 1 --}}
                        <div class="form-row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Aset</label>
                                    <input type="text" id="edit_nama" class="form-control" value="Laptop ASUS">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Aset</label>
                                    <select class="form-control" id="edit_jenis">
                                        <option>Aset Bergerak / Consumable</option>
                                        <option selected>Aset Belanja Modal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- ROW 2 --}}
                        <div class="form-row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Aset</label>
                                    <input type="text" id="edit_kode" class="form-control" value="BRG-001">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Merk Aset</label>
                                    <input type="text" id="edit_merk" class="form-control" value="ASUS">
                                </div>
                            </div>
                        </div>
                        {{-- ROW 3 --}}
                        <div class="form-row gutters">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Stock Awal</label>
                                    <input type="text" id="edit_stock_awal" class="form-control" value="10">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Stock Aktual</label>
                                    <input type="text" id="edit_stock_aktual" class="form-control" value="8">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Satuan Aset</label>
                                    <input type="text" id="edit_satuan" class="form-control" value="Unit">
                                </div>
                            </div>
                        </div>
                        {{-- ROW 4 --}}
                        <div class="form-row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Harga Aset (Rp.)</label>
                                    <input type="text" id="edit_harga" class="form-control" value="12000000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Spesifikasi</label>
                                    <input type="text" id="edit_spesifikasi" class="form-control"
                                        value="Intel i7 / RAM 16GB / SSD 512GB">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                Photo Aset
                                <span class="text-secondary">
                                    (*max: 3 photo)
                                </span>
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
        // =====================CREATE
        $('#formCreate').on('submit', function(e) {
            e.preventDefault();
            $('#modalCreate').modal('hide');
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Aset berhasil ditambahkan',
                confirmButtonColor: '#3085d6'
            });
        });
        // =====================SHOW
        function setEditData(
            nama,
            merk,
            jenis,
            harga,
            kode,
            stockAwal,
            stockAktual
        ) {
            $('#edit_nama').val(nama);
            $('#edit_merk').val(merk);
            $('#edit_jenis').val(jenis);
            $('#edit_harga').val(harga);
            $('#edit_kode').val(kode);
            $('#edit_stock_awal').val(stockAwal);
            $('#edit_stock_aktual').val(stockAktual);

        }
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
        // ==============SEND
        function toggleKirimButton() {
            let checked = $('.aset-checkbox:checked')
                .not('#checkAll')
                .length;
            if (checked > 0) {
                $('#kirimAsetButton').show();
            } else {
                $('#kirimAsetButton').hide();
            }
        }
        // CHECK ALL
        $('#checkAll').on('change', function() {
            $('.aset-checkbox').not(this).prop(
                'checked',
                $(this).prop('checked')
            );
            toggleKirimButton();
        });
        // CHECKBOX ITEM
        $('.aset-checkbox').not('#checkAll').on('change', function() {
            toggleKirimButton();
        });

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

        // ===================
        $('#kirimAsetButton').on('click', function() {

            window.location.href = '{{ route('pengiriman.index') }}';

        });
    </script>
@endsection
