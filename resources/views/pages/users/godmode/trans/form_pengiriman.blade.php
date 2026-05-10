@extends('layouts.base')

@section('title-head')
    <title>
        Transaksi | Form Pengiriman Aset
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item">Aset</li>
            <li class="breadcrumb-item">Pengiriman</li>
            <li class="breadcrumb-item active">Form Pengiriman Aset</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row gutters justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-7 col-sm-8 col-12">
            <form id="formPengiriman" enctype="multipart/form-data">
                <div class="card m-0">
                    <div class="card-header">
                        <div class="card-title text-center">Form Pengiriman Aset</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Submitter</label>
                            <input type="hidden" value="#">
                            <input type="text" class="form-control" value="Budi Santoso" disabled>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" value="Kepala Seksi Perpustakaan & Kearsipan UKT 1"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pengiriman</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">

                            <label>
                                Pilih Pulau Tujuan
                            </label>

                            <select class="form-control" id="pulauSelect" required>
                                <option selected disabled>
                                    - pilih pulau tujuan -
                                </option>
                                <option value="untungjawa">
                                    Pulau Untung Jawa
                                </option>
                                <option value="sebira">
                                    Pulau Sebira
                                </option>
                                <option value="harapan">
                                    Pulau Harapan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>
                                Pilih Lokasi Tujuan
                            </label>
                            <select class="form-control" id="lokasiSelect" required>
                                <option selected disabled>
                                    - pilih lokasi tujuan -
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>
                                Penerima
                            </label>
                            <select class="form-control" id="penerimaSelect" required>
                                <option selected disabled>
                                    - pilih personel penerima -
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>List Aset</label>
                            <div class="card">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width:5%">No</th>
                                            <th class="text-center text-wrap">Nama Aset</th>
                                            <th class="text-center text-wrap">Spesifikasi</th>
                                            <th class="text-center text-wrap">Stock Tersedia</th>
                                            <th class="text-center">Qty. Aset</th>
                                            <th class="text-center">Photo Bukti Kirim <span
                                                    class="text-info">(opsional)</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="font-weight-bolder text-wrap">
                                                Laptop ASUS
                                            </td>
                                            <td class="text-center text-wrap">
                                                Intel i7 / RAM 16GB / SSD 512GB
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Catatan <span class="text-info">(opsional)</span></label>
                            <textarea placeholder="Catatan tambahan" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="btn group-button">
                            <button type="submit" class="btn btn-primary float-right ml-3">
                                Submit Pengiriman
                            </button>
                            <a href="{{ route('dataAset.index') }}" class="btn btn-dark">
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
    <script>
        $('#formPengiriman').on('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Aset berhasil dikirim!',
                confirmButtonColor: '#3085d6'
            }).then(() => {

                window.location.href = '{{ route('listPengiriman.index') }}';

            });

        });

        //DUMMY DATA
        $('#pulauSelect').on('change', function() {
            let pulau = $(this).val();
            let lokasi = $('#lokasiSelect');
            lokasi.html('');
            lokasi.append(`
                <option selected disabled>
                - pilih lokasi tujuan -
                </option>
                `);
            if (pulau == 'untungjawa') {
                lokasi.append(`
                <option>
                SKKT Pulau Untung Jawa
                </option>
                <option>
                Lapangan Pulau Untung Jawa
                </option>
                <option>
                Puskesmas Pulau Untung Jawa
                </option>
                `);
            }
            if (pulau == 'sebira') {
                lokasi.append(`
                <option>
                SKKT Pulau Sebira
                </option>

                <option>
                Dermaga Pulau Sebira
                </option>

                <option>
                Pos Jaga Pulau Sebira
                </option>
                `);
            }
            if (pulau == 'harapan') {
                lokasi.append(`
                <option>
                SKKT Pulau Harapan
                </option>
                <option>
                Lapangan Pulau Harapan
                </option>
                <option>
                Puskesmas Pulau Harapan
                </option>
                `);
            }
        });

        // DUMMY DATA
        $('#pulauSelect').on('change', function() {

            let pulau = $(this).val();

            let lokasi = $('#lokasiSelect');

            let penerima = $('#penerimaSelect');

            lokasi.html('');
            penerima.html('');

            lokasi.append(`
                <option selected disabled>
                - pilih lokasi tujuan -
                </option>
                `);

            penerima.append(`
                <option selected disabled>
                - pilih personel penerima -
                </option>
                `);

            if (pulau == 'untungjawa') {

                lokasi.append(`
                    <option>
                    SKKT Pulau Untung Jawa
                    </option>

                    <option>
                    Lapangan Pulau Untung Jawa
                    </option>

                    <option>
                    Puskesmas Pulau Untung Jawa
                    </option>
                `);

                penerima.append(`
                    <option>
                    Fisudur (PJLP Pulau Untung Jawa)
                    </option>

                    <option>
                    Musleh (PJLP Pulau Untung Jawa)
                    </option>

                    <option>
                    Kodim (PJLP Pulau Untung Jawa)
                    </option>
                    `);

            }

            if (pulau == 'sebira') {

                lokasi.append(`
                    <option>
                    SKKT Pulau Sebira
                    </option>

                    <option>
                    Dermaga Pulau Sebira
                    </option>

                    <option>
                    Pos Jaga Pulau Sebira
                    </option>
                    `);

                penerima.append(`
                    <option>
                    Rahmat (PJLP Pulau Sebira)
                    </option>

                    <option>
                    Fauzan (PJLP Pulau Sebira)
                    </option>

                    <option>
                    Deni (PJLP Pulau Sebira)
                    </option>
                    `);

            }

            if (pulau == 'harapan') {

                lokasi.append(`
                    <option>
                    SKKT Pulau Harapan
                    </option>

                    <option>
                    Lapangan Pulau Harapan
                    </option>

                    <option>
                    Puskesmas Pulau Harapan
                    </option>
                    `);

                penerima.append(`
                    <option>
                    Bagus (PJLP Pulau Harapan)
                    </option>

                    <option>
                    Ilham (PJLP Pulau Harapan)
                    </option>

                    <option>
                    Ridwan (PJLP Pulau Harapan)
                    </option>
                    `);
            }
        });
    </script>
@endsection
