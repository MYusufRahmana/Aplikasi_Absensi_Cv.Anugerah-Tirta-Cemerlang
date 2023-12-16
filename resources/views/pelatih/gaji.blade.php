@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Pelatih</title>

        <style>
            .custom {
                float: right;
                margin-right: 3vh
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

    <body>
        <h2>Info Gaji</h2>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pelatih</h5>
                        <div class="ml-3">
                            <p for="" style="margin-left:-10px; font-size:14px" class="col-lg-2">Nama Pelatih :</p>
                            <p style="font-size:14px"> {{ Session::get('pelatih')->Nama_Pelatih }}</p>
                        </div>
                        <div class="ml-3">
                            <p for="" style="margin-left:-10px; font-size:14px" class="col-lg-2">Gaji Setiap Hadir :</p>
                            <p style="font-size:14px"> {{ 'Rp ' . number_format(Session::get('pelatih')->gaji , 0, ',', '.')}}</p>
                        </div>
                        <div class="ml-3">
                            <p for="" style="margin-left:-10px; font-size:14px" class="col-lg-2">Total Absensi Hadir :</p>
                            <p style="font-size:14px"> {{ $jumlahAbsen }}</p>
                        </div>
                        <div class="ml-3">
                            <p for="" style="margin-left:-10px; font-size:14px" class="col-lg-2">Gaji Yang Diterima :</p>
                            <p style="font-size:14px"> {{'Rp ' . number_format(Session::get('pelatih')->gaji*$jumlahAbsen , 0, ',', '.')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
