@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Riwayat Absen Pelatih</title>
    </head>

    <body>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Kelas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                @foreach ($user as $riwayat)
                    <tr>
                        <td>{{ $riwayat->pelatih->Nama_Pelatih }}</td>
                        <td>{{ date('d M Y', strtotime($riwayat->waktu_absen)) }}</td>
                        @if ($riwayat->kelas == '1')
                        <td>Kelas Pemula - Reguler</td>
                        @endif
                        @if ($riwayat->kelas == '2')
                        <td>Kelas Pemula - Group</td>
                        @endif
                        @if ($riwayat->kelas == '3')
                        <td>Kelas Pemula - Private</td>
                        @endif
                        @if ($riwayat->kelas == '4')
                        <td>Jalur Prestasi</td>
                        @endif
                        <td>{{ $riwayat->status }}</td>
                    </tr>
                        @endforeach
                @if ($user->isEmpty())
                    <tr>
                        <td colspan="3">Tidak ada data absensi.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </body>

    </html>

@endsection
