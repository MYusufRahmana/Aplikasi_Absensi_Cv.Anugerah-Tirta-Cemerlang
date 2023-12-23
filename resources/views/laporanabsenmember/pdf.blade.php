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
</head>

<body>
    <div class="fluids text-center">
        <h2>Laporan Absen Member</h2>
    </div>
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

    {{-- @include('layouts.script') --}}
</body>

</html>
