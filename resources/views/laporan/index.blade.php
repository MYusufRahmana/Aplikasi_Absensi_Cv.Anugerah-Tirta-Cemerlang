@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Data Absen</title>

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
                    <th>Nama Pelatih</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Verifikasi Status</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                @if ($reqAbsen->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">Belum Ada Yang Absen</td>
                    </tr>
                @else
                    @foreach ($reqAbsen as $item)
                        <tr>
                            <td>{{ $item->pelatih->Nama_Pelatih }}</td>
                            <td>{{ $item->waktu_absen }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <form action="{{ route('laporan.update', $item->id_absensi_pelatih) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name ="H" id="H" value="Hadir">
                                    <button type="submit" class="btn btn-success d-flex">Hadir</button>
                                </form>
                                <form action="{{ route('laporan.update', $item->id_absensi_pelatih) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name ="B" id="B" value="Bolos">
                                    <button type="submit" class="btn btn-danger d-flex">Bolos</button>
                                </form>
                                <form action="{{ route('laporan.update', $item->id_absensi_pelatih) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name ="I" id="I" value="Izin">
                                    <button type="submit" class="btn btn-danger d-flex">Izin</button>
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
