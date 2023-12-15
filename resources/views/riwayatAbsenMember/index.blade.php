@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Riwayat Absen</title>
    </head>

    <body>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Waktu</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                @foreach ($user as $riwayat)
                    <tr>
                        <td>{{ Session::get('member')->Nama }}</td>
                        <td>
                            @if (Session::get('member')->Kelas == '1')
                                Kelas Pemula - Reguler
                            @endif
                            @if (Session::get('member')->Kelas == '2')
                                Kelas Pemula - Group
                            @endif
                            @if (Session::get('member')->Kelas == '3')
                                Kelas Pemula - Private
                            @endif
                            @if (Session::get('member')->Kelas == '4')
                                Jalur Prestasi
                            @endif
                        </td>
                        <td>{{ date('d M Y', strtotime($riwayat->waktu_absen)) }}</td>
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
