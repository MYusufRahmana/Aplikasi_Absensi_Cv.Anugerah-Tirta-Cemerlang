@extends('mainmenu')
@section('Halaman Absen')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pelatih - Info Gaji</title>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            border: 1px solid #ced4da;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            background-color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        .info-row {
            margin-bottom: 15px;
        }

        .info-label {
            font-size: 16px;
            font-weight: bold;
            width: 200px;
            display: inline-block;
            color: #495057;
        }

        .info-value {
            font-size: 16px;
            color: #007bff;
        }

        .info-value p {
            margin: 5px 0;
        }


        li {
            font-size: 1rem;
            list-style-type: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Info Gaji</h2>
                        <div class="info-row">
                            {{-- <span class="info-label">Nama Pelatih : {{ Session::get('pelatih')->Nama_Pelatih }}</span> --}}
                            <div style="float: right;"> Note:
                                <ul>
                                    <li>Setiap hadir: Rp 50.000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-row">
                            <span class="info-label"> Jumlah Hadir</span>
                            <span class="info-value">{{ $jumlahAbsen }}</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Total Gaji</span>
                            <span class="info-value">{{'Rp ' . number_format(($jumlahAbsen*50000) , 0, ',', '.')}}</span>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection
