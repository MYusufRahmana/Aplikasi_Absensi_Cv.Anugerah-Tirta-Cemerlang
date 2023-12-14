@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Profile</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .form-control {
                width: 300px
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Peran</th>
                            <th>Gaji</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody id="presensiTable">
                        @foreach ($pelatih as $item)
                            <tr>
                                <td>{{ $item->Nama_Pelatih }}</td>
                                <td>{{ ucwords($item->role) }}</td>
                                <td>{{ 'Rp ' . number_format($item->gaji, 0, ',', '.') }}</td>
                                <td><a href="{{ route('penggajianpelatih.edit', $item->id) }}"><button class="btn btn-warning">Edit</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    </html>
@endsection
