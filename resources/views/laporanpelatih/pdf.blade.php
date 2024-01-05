<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: white
        }

        .table-striped {
            background-color: #DBDFEA;
        }

        h2 {
            text-align: center;
            margin-bottom: 2rem;
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
    <title>Laporan Pelatih</title>
</head>

<body>
    <div class="fluids text-center">
        <h2>Laporan Pelatih</h2>
    </div>
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

    {{-- @include('layouts.script') --}}
</body>

</html>
