@extends('layouts.base')

@section('title-head')
    <title>
        Aset Tetap | Tambah Data Aset Tetap
    </title>
@endsection

@section('path')
    <div class="page-header">

        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                Aset
            </li>

            <li class="breadcrumb-item">
                Aset Tetap
            </li>

            <li class="breadcrumb-item active">
                Tambah Data Aset Tetap
            </li>

        </ol>

    </div>
@endsection

@section('content')
    <div class="row gutters justify-content-center">

        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <form id="formCreateAsetTetap">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h4 class="mb-0">
                                Form Tambah Data Aset Tetap
                            </h4>
                            <a href="{{ route('dataAsetTetap.index') }}" class="btn btn-outline-primary">
                                <i class="fa fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-3">
                            Informasi Aset Tetap
                        </h5>
                        <div class="row gutters">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Kode Barang
                                    </label>
                                    <input type="text" class="form-control" placeholder="Masukkan kode barang">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Register
                                    </label>
                                    <input type="text" class="form-control" placeholder="Masukkan nomor register">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Jenis Barang
                                    </label>
                                    <input type="text" class="form-control" value="Aset Tetap" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Ukuran
                                    </label>
                                    <input type="text" class="form-control" placeholder="Masukkan ukuran">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Satuan
                                    </label>
                                    <input type="text" class="form-control" placeholder="Contoh: Unit / m²">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Tanggal Perolehan
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Tanggal BAST
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Asal Oleh
                                    </label>
                                    <input type="text" class="form-control" placeholder="Masukkan asal perolehan">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5 class="mb-3">
                            Informasi Wilayah
                        </h5>
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Pilih Pulau
                                    </label>
                                    <select class="form-control" id="pulauSelect">
                                        <option selected disabled>
                                            - pilih pulau -
                                        </option>
                                        <option value="harapan">
                                            Pulau Harapan
                                        </option>
                                        <option value="untungjawa">
                                            Pulau Untung Jawa
                                        </option>
                                        <option value="sebira">
                                            Pulau Sebira
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Pilih Rumpun / Lokasi
                                    </label>
                                    <select class="form-control" id="rumpunSelect">
                                        <option selected disabled>
                                            - pilih rumpun / lokasi -
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Kabupaten
                                    </label>
                                    <input type="text" class="form-control" value="Kepulauan Seribu">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Kecamatan
                                    </label>
                                    <input type="text" class="form-control" placeholder="Masukkan kecamatan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Kelurahan
                                    </label>
                                    <input type="text" class="form-control" placeholder="Masukkan kelurahan">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Alamat
                                    </label>
                                    <textarea class="form-control" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>
                                        No Jalan
                                    </label>
                                    <input type="text" class="form-control" placeholder="No jalan">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>
                                        RT
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>
                                        RW
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- KOORDINAT --}}
                        <h5 class="mb-3">
                            Koordinat Lokasi
                        </h5>
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Latitude
                                    </label>
                                    <input type="text" class="form-control" value="-6.200000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Longitude
                                    </label>
                                    <input type="text" class="form-control" value="106.816666">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                Maps Lokasi
                            </label>
                            <div class="rounded overflow-hidden border">
                                <iframe src="https://maps.google.com/maps?q=-6.200000,106.816666&z=15&output=embed"
                                    width="100%" height="350" style="border:0;">
                                </iframe>
                            </div>
                        </div>
                        <hr>
                        <h5 class="mb-3">
                            Detail Fisik Bangunan
                        </h5>
                        <div class="row gutters">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>
                                        Kondisi
                                    </label>

                                    <select class="form-control">
                                        <option>
                                            Baik
                                        </option>
                                        <option>
                                            Rusak Ringan
                                        </option>
                                        <option>
                                            Rusak Berat
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>
                                        Bertingkat
                                    </label>
                                    <select class="form-control">
                                        <option>
                                            Ya
                                        </option>
                                        <option>
                                            Tidak
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>
                                        Beton
                                    </label>
                                    <select class="form-control">
                                        <option>
                                            Ya
                                        </option>
                                        <option>
                                            Tidak
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>
                                        Unit Pengampu
                                    </label>
                                    <select class="form-control">
                                        <option selected disabled>
                                            - pilih unit pengampu -
                                        </option>
                                        <option>
                                            Unit Kerja Teknis 1
                                        </option>
                                        <option>
                                            Unit Kerja Teknis 2
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Harga (Rp.)
                                    </label>
                                    <input type="number" class="form-control" placeholder="Masukkan harga">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Kapitalisasi (Rp.)
                                    </label>
                                    <input type="number" class="form-control" placeholder="Masukkan kapitalisasi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        Total (Rp.)
                                    </label>
                                    <input type="number" class="form-control" placeholder="Masukkan total">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Tanggal Dokumen
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        No. Dokumen
                                    </label>
                                    <input type="text" class="form-control" placeholder="Masukkan nomor dokumen">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                Keterangan
                            </label>
                            <textarea class="form-control" rows="3" placeholder="Masukkan keterangan tambahan"></textarea>
                        </div>
                        <hr>
                        <h5 class="mb-3">
                            Dokumentasi Aset
                        </h5>
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Upload Dokumentasi Aset
                                    </label>
                                    <input type="file" class="form-control image-input" accept="image/*" multiple>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Bukti Dukung Luas Pada Dokumen
                                    </label>
                                    <input type="file" class="form-control" accept=".pdf,.jpg,.png">
                                </div>
                            </div>
                        </div>
                        <div class="preview-container d-flex flex-wrap">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('.image-input').on('change', function(e) {
            $('.preview-container').html('');
            Array.from(e.target.files).forEach(file => {
                let reader = new FileReader();
                reader.onload = function(event) {

                    $('.preview-container').append(
                        `<img src="${event.target.result}"
                        class="img-thumbnail mr-2 mb-2"
                        style="height:120px;">`
                    );
                }
                reader.readAsDataURL(file);
            });
        });

        $('#formCreateAsetTetap').on('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data aset tetap berhasil ditambahkan',
                confirmButtonColor: '#3085d6'
            }).then(() => {
                window.location.href = '{{ route('dataAsetTetap.index') }}';
            });
        });

        $('#pulauSelect').on('change', function() {
            let pulau = $(this).val();
            let rumpun = $('#rumpunSelect');
            rumpun.html('');
            rumpun.append(`
            <option selected disabled>
            - pilih rumpun / lokasi -
            </option>
            `);

            if (pulau == 'harapan') {
                rumpun.append(`
                <option>
                SKKT Pulau Harapan
                </option>

                <option>
                Rumah Singgah Pulau Harapan
                </option>

                <option>
                Perpustakaan Pulau Harapan
                </option>

                <option>
                Lapangan Pulau Harapan
                </option>
                `);
            }

            if (pulau == 'untungjawa') {
                rumpun.append(`
                <option>
                SKKT Pulau Untung Jawa
                </option>

                <option>
                Rumah Singgah Pulau Untung Jawa
                </option>

                <option>
                Perpustakaan Pulau Untung Jawa
                </option>

                <option>
                Lapangan Pulau Untung Jawa
                </option>
                `);
            }

            if (pulau == 'sebira') {
                rumpun.append(`
                <option>
                SKKT Pulau Sebira
                </option>

                <option>
                Rumah Singgah Pulau Sebira
                </option>

                <option>
                Perpustakaan Pulau Sebira
                </option>

                <option>
                Lapangan Pulau Sebira
                </option>
                `);
            }
        });
    </script>
@endsection
