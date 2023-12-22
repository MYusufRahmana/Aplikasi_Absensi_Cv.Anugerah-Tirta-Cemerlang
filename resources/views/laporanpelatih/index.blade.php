{{-- @extends('mainmenu')
@section('Halaman Absen')
@section('content') --}}
@include('layouts.style')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Data Absen</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style>
            body {
                background-color: white
            }
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            .add-btn {
                float: right;
                margin-bottom: 10px;
                background-color: #4CAF50;
                color: white;
                text-decoration: none;
                padding: 8px 16px;
                border-radius: 4px;
                transition: background-color 0.3s;
            }

            .add-btn:hover {
                background-color: #45a049;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 12px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Laporan Pelatih</h2>
            <a href={{ url('/laporanpelatih/cetak_pdf') }} class="btn btn-primary">Cetak PDF</a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Pelatih</th>
                    <th>Total Gaji</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                @php $i=1 @endphp
                @foreach ($pelatih as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$item->Nama_Pelatih}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>

    </html>
{{-- @endsection --}}
