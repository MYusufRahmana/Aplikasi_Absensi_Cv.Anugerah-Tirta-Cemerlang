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
