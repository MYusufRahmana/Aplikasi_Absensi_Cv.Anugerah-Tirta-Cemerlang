@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Data Absen</title>

        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            .add-btn {
                float: right;
                margin-bottom: 10px;
                background-color: #4CAF50;
                color: white;
                text-decoration: none;
                padding: 8px 16px;
                border-radius: 4px;
                transition: background-color 0.3s;
            }

            .add-btn:hover {
                background-color: #45a049;
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
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

    <body>
        <h4>Verifikasi Absensi Pelatih</h4>
        @if (Session::has('success'))
            <div class="alert alert-success"> {{ session('success') }} </div>
        @endif
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Pelatih</th>
                    <th>Waktu</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Verifikasi Status</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                @if ($reqAbsen->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Belum Ada Yang Absen</td>
                    </tr>
                @else
                <?php $i=1;?>
                    @foreach ($reqAbsen as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->pelatih->Nama_Pelatih }}</td>
                            <td>{{ date('d M Y', strtotime($item->waktu_absen)) }}</td>
                            @if ($item->kelas == '1')
                                <td>Kelas Pemula - Reguler</td>
                            @endif
                            @if ($item->kelas == '2')
                                <td>Kelas Pemula - Group</td>
                            @endif
                            @if ($item->kelas == '3')
                                <td>Kelas Pemula - Private</td>
                            @endif
                            @if ($item->kelas == '4')
                                <td>Jalur Prestasi</td>
                            @endif
                            <td>{{ $item->status }}</td>
                            <td>
                                <form action="{{ route('laporan.update', $item->id_absensi_pelatih) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name ="H" id="H" value="Hadir">
                                    <button type="submit" class="btn btn-success d-flex">Setuju</button>
                                </form>
                                <form action="{{ route('laporan.update', $item->id_absensi_pelatih) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name ="B" id="B" value="Tidak Hadir">
                                    <button type="submit" class="btn btn-danger d-flex">Tolak</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        </div>
    </body>

    </html>
@endsection
