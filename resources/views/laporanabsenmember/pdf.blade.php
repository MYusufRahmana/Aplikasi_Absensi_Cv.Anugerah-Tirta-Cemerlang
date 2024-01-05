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
