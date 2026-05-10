@extends('layouts.userbase')

@section('title-head')
    <title>
        Transaksi | Form Penerimaan Aset
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
                Form Penerimaan Aset
            </li>
        </ol>

    </div>
@endsection

@section('content')
    <div class="row gutters justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <form id="formPenerimaan">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h4 class="mb-0">
                                Form Penerimaan Aset
                            </h4>
                            <a href="{{ route('listPenerimaan.index') }}" class="btn btn-outline-primary">
                                <i class="fa fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- INFORMASI RESI --}}
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        No. Resi
                                    </label>
                                    <input type="text" class="form-control" value="RESI/UKT1/2026/001" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Tanggal Pengiriman
                                    </label>
                                    <input type="text" class="form-control" value="07-05-2026" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Pengirim
                                    </label>
                                    <input type="text" class="form-control" value="Budi Santoso" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Tujuan Gudang
                                    </label>
                                    <input type="text" class="form-control" value="Gudang Jawa" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            Pilih <br>
                                            <input type="checkbox" id="checkAllBarang">
                                        </th>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th class="text-center">
                                            Nama Aset
                                        </th>
                                        <th class="text-center">
                                            Qty
                                        </th>
                                        <th class="text-center">
                                            Dokumentasi Kirim
                                        </th>
                                        <th class="text-center">
                                            Dokumentasi Terima
                                        </th>
                                        <th class="text-center">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <input type="checkbox" class="barang-checkbox">
                                        </td>
                                        <td class="text-center align-middle">
                                            1
                                        </td>
                                        <td class="text-center align-middle">
                                            Laptop ASUS
                                        </td>
                                        <td class="text-center align-middle">
                                            2 Unit
                                        </td>
                                        <td class="text-center align-middle">
                                            <img src="https://placehold.co/100x100" class="img-thumbnail"
                                                style="height:70px;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <input type="file" class="form-control" accept="image/*">
                                            <small class="text-muted">
                                                Opsional
                                            </small>
                                        </td>
                                        <td class="text-center align-middle">
                                            <span class="badge badge-warning p-2">
                                                Menunggu Penerimaan
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center align-middle">
                                            <input type="checkbox" class="barang-checkbox">
                                        </td>
                                        <td class="text-center align-middle">
                                            2
                                        </td>
                                        <td class="text-center align-middle">
                                            Printer Epson
                                        </td>
                                        <td class="text-center align-middle">
                                            1 Unit
                                        </td>
                                        <td class="text-center align-middle">
                                            <img src="https://placehold.co/100x100" class="img-thumbnail"
                                                style="height:70px;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <input type="file" class="form-control" accept="image/*">
                                            <small class="text-muted">
                                                Opsional
                                            </small>
                                        </td>
                                        <td class="text-center align-middle">
                                            <span class="badge badge-warning p-2">
                                                Menunggu Penerimaan
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>
                                Upload Dokumentasi Penerimaan
                                <span class="text-info">
                                    (Opsional)
                                </span>
                            </label>
                            <input type="file" class="form-control" accept="image/*" multiple>
                        </div>
                        <div class="form-group">
                            <label>
                                Catatan Penerimaan
                                <span class="text-info">
                                    (Opsional)
                                </span>
                            </label>
                            <textarea class="form-control" rows="4" placeholder="Masukkan catatan penerimaan"></textarea>
                        </div>
                        <div class="card bg-light border-0">
                            <div class="card-body">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkPenerimaan" required>
                                    <label class="custom-control-label" for="checkPenerimaan">
                                        Saya menyatakan aset telah diterima
                                        dan seluruh tanggung jawab aset
                                        berpindah kepada penerima.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-4">
                            <button type="submit" id="btnTerimaBarang" class="btn btn-success" style="display:none;">
                                <i class="fa fa-check"></i>
                                Terima Barang
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        // =======================
        function toggleTerimaButton() {
            let checked = $('.barang-checkbox:checked').length;
            if (checked > 0) {
                $('#btnTerimaBarang').show();
            } else {
                $('#btnTerimaBarang').hide();
            }
        }
        $('#checkAllBarang').on('change', function() {
            $('.barang-checkbox').prop(
                'checked',
                $(this).prop('checked')
            );
            toggleTerimaButton();
        });
        $('.barang-checkbox').on('change', function() {
            toggleTerimaButton();
        });

        // ============================
        $('#formPenerimaan').on('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'warning',
                title: 'Konfirmasi Penerimaan',
                html: `
                            Setelah diterima:<br><br>
                            - aset akan masuk ke daftar aset anda<br>
                            - stok akan diperbaharui<br>
                            - tanggung jawab aset berpindah kepada penerima
                            `,
                showCancelButton: true,
                confirmButtonText: 'Ya, Terima Barang',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#28a745'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Aset berhasil diterima',
                        confirmButtonColor: '#3085d6'
                    }).then(() => {
                        window.location.href = '{{ route('listPenerimaan.index') }}';
                    });
                }
            });
        });
    </script>
@endsection
