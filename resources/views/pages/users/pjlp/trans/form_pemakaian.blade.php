@extends('layouts.userbase')

@section('title-head')
    <title>
        Transaksi | Form Pemakaian Aset
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item">Aset</li>
            <li class="breadcrumb-item">Pemakaian</li>
            <li class="breadcrumb-item active">Form Pemakaian Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 col-12">
            <form id="formPemakaian">
                <div class="card m-0">
                    <div class="card-header">
                        <div class="card-title text-center">
                            Form Pemakaian Aset
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pengguna</label>
                            <input type="text" class="form-control" value="Budi Santoso" disabled>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" value="PJLP" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pemakaian</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keperluan Pemakaian</label>
                            <select class="form-control" required>
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
                                <option>
                                    Kegiatan Perpustakaan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Penanggung Jawab</label>
                            <select class="form-control" required>
                                <option selected disabled>
                                    - pilih penanggung jawab -
                                </option>
                                <option>
                                    Koordinator Gudang
                                </option>
                                <option>
                                    Admin Aset
                                </option>
                                <option>
                                    Kasi Perpustakaan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>List Aset</label>
                            <div class="card">
                                <table class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width:5%">
                                                No
                                            </th>

                                            <th class="text-center">
                                                Nama Aset
                                            </th>

                                            <th class="text-center">
                                                Spesifikasi
                                            </th>

                                            <th class="text-center">
                                                Stock
                                            </th>

                                            <th class="text-center">
                                                Qty Dipakai
                                            </th>

                                            <th class="text-center">
                                                Dokumentasi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                1
                                            </td>
                                            <td class="font-weight-bolder">
                                                Laptop ASUS
                                            </td>
                                            <td class="text-center">
                                                Intel i7 / RAM 16GB
                                            </td>
                                            <td class="text-center">
                                                8 Unit
                                            </td>
                                            <td class="text-center">
                                                <input type="number" class="form-control" min="1" placeholder="qty"
                                                    required>
                                            </td>
                                            <td class="text-center">
                                                <input type="file" class="form-control" accept="image/*">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                2
                                            </td>
                                            <td class="font-weight-bolder">
                                                Printer Epson
                                            </td>
                                            <td class="text-center">
                                                Printer Ink Tank WiFi
                                            </td>
                                            <td class="text-center">
                                                4 Unit
                                            </td>
                                            <td class="text-center">
                                                <input type="number" class="form-control" min="1" placeholder="qty"
                                                    required>
                                            </td>
                                            <td class="text-center">
                                                <input type="file" class="form-control" accept="image/*">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                Catatan
                                <span class="text-info">
                                    (opsional)
                                </span>
                            </label>
                            <textarea class="form-control" rows="3" placeholder="Catatan tambahan"></textarea>
                        </div>
                        <div class="btn group-button">
                            <button type="submit" class="btn btn-primary float-right ml-3">
                                Submit Pemakaian
                            </button>
                            <a href="{{ route('pjlpAset.index') }}" class="btn btn-dark">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('javascript')
@section('javascript')
    <script>
        $('#formPemakaian').on('submit', function(e) {

            e.preventDefault();

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data pemakaian aset berhasil disubmit!',
                confirmButtonColor: '#3085d6'
            }).then(() => {

                window.location.href = '{{ route('detailPemakaian.index') }}';

            });

        });
    </script>
@endsection
@endsection
