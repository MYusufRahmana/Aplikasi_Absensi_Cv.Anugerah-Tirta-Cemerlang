@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Data Absen</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style>
            body {
                background-color: white
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
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
                text-align: center
            }

            tr th {
                background-color: #f2f2f2;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>
    </head>

    <body>
        <a href={{ url('/laporanpelatih/cetak_pdf') }} class="btn btn-success" style="margin-left: 1rem">Cetak PDF</a>
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
                        <td>{{ $item->Nama_Pelatih }}</td>
                        <td>Rp.{{number_format($totalGaji[$item->id] ?? 0, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection

</html>
