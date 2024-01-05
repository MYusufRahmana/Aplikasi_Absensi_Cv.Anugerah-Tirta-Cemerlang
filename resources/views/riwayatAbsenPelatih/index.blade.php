@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Riwayat Absen Pelatih</title>
        <style>
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
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Kelas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                <?php $i = 1; ?>
                @foreach ($user as $riwayat)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $riwayat->pelatih->Nama_Pelatih }}</td>
                        <td>{{ date('d M Y', strtotime($riwayat->waktu_absen)) }}</td>
                        <td>{{ date('H:i:s', strtotime($riwayat->waktu_absen)) }}</td>
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
