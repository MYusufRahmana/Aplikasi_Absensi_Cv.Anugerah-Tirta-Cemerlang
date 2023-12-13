@extends('mainmenu')
@section('Halaman Absen')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Absen</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Nama Pelatih</th>
                <th>Waktu</th>
                <th>Status</th>
                <th>Verifikasi</th>
            </tr>
        </thead>
        <tbody id="presensiTable">
            <tr>
                <td>Widi</td>
                <td>13 Desember</td>
                <td>Menunggu</td>
                <td>
                    <button class="btn btn-success">Setuju</button>
                    <button class="btn btn-danger">Tolak</button>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
@endsection
