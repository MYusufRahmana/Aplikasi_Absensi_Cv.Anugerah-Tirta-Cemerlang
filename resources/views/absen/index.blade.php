@extends('mainmenu')
@section('Halaman Absen')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Data Absen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .add-btn {
            float: right;
            margin-bottom: 10px;
            background-color: #808080; /* Warna abu-abu */
            border-color: #808080; /* Warna border abu-abu */
            color: #fff; /* Warna teks putih */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <h2>Pertemuan</h2>
    <a href="#" class="btn add-btn"><i class="bi bi-upc-scan"></i> Presensi Mandiri</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Absen</th>
                <th>Jam Scan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensi as $absen)
                <tr>
                    <td>{{ $absen->id }}</td>
                    <td>{{ $absen->user->Nama }}</td>
                    <td>{{ $absen->tanggal_absen }}</td>
                    <td>{{ $absen->waktu_scan }}</td>
                    <td>{{ $absen->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

@endsection
