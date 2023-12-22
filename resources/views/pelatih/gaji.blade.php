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
                        <div class="ml-3">
                            <p for="" style="font-size:14px" class="col-lg-2">Nama Pelatih</p>
                            <p style="font-size:14px">: {{ Session::get('pelatih')->Nama_Pelatih }}</p>
                        </div>
                        <div class="ml-3">
                            <p for="" style="font-size:14px; margin-left:0.7vw">Jumlah Hadir Kelas:</p>
                            <p for="" style="font-size:14px; margin-left:1vw" class="col-lg-2">Kelas Regular - Pemula</p>
                            <p for="" style="font-size:14px; margin-left:1vw" >: {{ $k1 }}</p>
                            <p for="" style="font-size:14px; margin-left:1vw" class="col-lg-2">Kelas Regular - Group</p>
                            <p for="" style="font-size:14px; margin-left:1vw" >: {{ $k2 }}</p>
                            <p for="" style="font-size:14px; margin-left:1vw" class="col-lg-2">Kelas Regular - Private</p>
                            <p for="" style="font-size:14px; margin-left:1vw" >: {{ $k3 }}</p>
                            <p for="" style="font-size:14px; margin-left:1vw" class="col-lg-2">Jalur Prestasi</p>
                            <p for="" style="font-size:14px; margin-left:1vw" >: {{ $k4 }}</p>
                        </div>
                        <div class="ml-3">
                            <p for="" style="font-size:14px" class="col-lg-2">Total Gaji</p>
                            <p style="font-size:14px">: {{'Rp ' . number_format(($k1*50000)+($k2*50000)+($k3*80000)+($k4*50000) , 0, ',', '.')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
