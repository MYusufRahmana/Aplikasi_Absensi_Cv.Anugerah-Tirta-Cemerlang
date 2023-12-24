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
        <a href="{{ route('laporanabsenmember.create') }}" class="btn btn-primary" style="float: right; padding:1rem;">Cetak PDF</a>
        @foreach([1, 2, 3, 4] as $kelas)
        <h5>Kelas Pemula - {{ $kelas == 4 ? 'Jalur Prestasi' : ($kelas == 3 ? 'Private' : ($kelas == 2 ? 'Group' : 'Reguler')) }}</h5>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama Member</th>
                    <th>Sekolah</th>
                    <th>Status</th>
                    <th>Kelas</th>
                    <th>Jumlah Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($member as $item)
                    @if ($item->Kelas == $kelas)
                        <tr>
                            <td>{{ $item->Nama }}</td>
                            <td>{{ $item->Sekolah }}</td>
                            <td>{{ $item->status == '1' ? 'Aktif' : '' }}</td>
                            <td>{{ $kelas == 4 ? 'Jalur Prestasi' : ($kelas == 3 ? 'Private' : ($kelas == 2 ? 'Group' : 'Reguler')) }}</td>
                            <td>{{ $absenCounts[$item->no] ?? 0  }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endforeach
    </body>

    </html>
@endsection
