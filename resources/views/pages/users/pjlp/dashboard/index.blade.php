@extends('layouts.userbase')

@section('title-head')
    <title>
        Dashboard Aset | PJLP
    </title>
@endsection

@section('path')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard Aset PJLP</li>
    </div>
@endsection


@section('content')
    <div class="row gutters d-flex justify-content-center align-item-center">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3 d-flex justify-content-center align-item-center">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('pjlpAset.index') }}">
                                <div class="launch-box h-180">
                                    <h3>Data Aset</h3>
                                    <i class="fa fa-database"></i>
                                    <p>Lihat Data</p>
                                    <h5 class="jam"></h5>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('listPenerimaan.index') }}">
                                <div class="launch-box h-180">
                                    <h3>Penerimaan Aset</h3>
                                    <i class="fa fa-window-restore"></i>
                                    <p>Data Penerimaan Aset</p>
                                    <h5>Lihat Data </h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="{{ route('pemakaian.index') }}">
                                <div class="launch-box h-180">
                                    <h3>Transaksi Aset</h3>
                                    <i class="fa fa-exchange"></i>
                                    <p>Data Transaksi Aset</p>
                                    <h5>Lihat Data</h5>
                                </div>
                            </a>
                        </div> --}}
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


@section('javascript')
    <script>
        function toggleModal(id) {
            $('#id').val(id);
        }

        function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);

            document.querySelectorAll('.jam').forEach(function(element) {
                element.innerHTML = h + ":" + m + ":" + s + ' WIB';
            });

            setTimeout(startTime, 1000);
        }


        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            };
            return i;
        }

        $(document).ready(function() {
            startTime();
        });
    </script>
@endsection
