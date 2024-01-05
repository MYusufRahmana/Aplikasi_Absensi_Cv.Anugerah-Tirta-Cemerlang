@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Data Absen</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style>
            td,
            th {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h4 style="margin-bottom:2rem">Laporan Kelas Member</h4>
        <a href="{{ route('laporanabsenmember.create') }}" class="btn btn-primary" style="float: right; padding:1rem;">Cetak
            PDF</a>
        @foreach ($kelas_member as $km)
            <h5>{{ $km['title'] }}</h5>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Member</th>
                        <th>Sekolah</th>
                        <th>Status</th>
                        <th>Jumlah Kehadiran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($km['data'] as $item)
                        <tr>
                            <td>{{ $item->member->Nama }}</td>
                            <td>{{ $item->member->Sekolah }}</td>
                            <td>{{ $item->member->status == '1' ? 'Aktif' : '' }}</td>
                            <td>{{ $item->count_kehadiran }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    </body>

    </html>
@endsection
