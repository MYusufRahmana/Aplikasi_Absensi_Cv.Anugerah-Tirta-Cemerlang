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
        <form action="" style="display: flex;gap:8px">
            <input type="month" name="tahun_bulan" value="{{ request()->get('tahun_bulan', date('Y-m')) }}"
                class="form-control" style="width: 200px">
            <button class="btn btn-info">
                <i class="fa fa-search"></i>
            </button>
            <a href='{{ url('/laporanpelatih') }}?tahun_bulan={{ request()->get('tahun_bulan', date('Y-m')) }}&pdf=true'
                class="btn btn-success">
                <i class="fa fa-print"></i> Cetak PDF
            </a>
        </form>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Group</th>
                    <th>Regular</th>
                    <th>Private</th>
                    <th>Prestasi</th>
                    <th>Total Kehadiran</th>
                    <th>Total Gaji</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                @php $i=1 @endphp
                @foreach ($laporan_absensi_pelatih as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->pelatih->Nama_Pelatih }}</td>
                        <td>{{ $item->jumlah_hadir_kelas_1 }}</td>
                        <td>{{ $item->jumlah_hadir_kelas_2 }}</td>
                        <td>{{ $item->jumlah_hadir_kelas_3 }}</td>
                        <td>{{ $item->jumlah_hadir_kelas_4 }}</td>
                        <td>{{ $item->total_jumlah_hadir }}</td>
                        <td>Rp {{ number_format($item->total_gaji, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection

</html>
