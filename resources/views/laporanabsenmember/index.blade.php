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
        <h4>Laporan Member</h4>
        @if (Session::has('success'))
            <div class="alert alert-success"> {{ session('success') }} </div>
        @endif
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama Member</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Persentase Hadir</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                {{-- @if ($reqAbsen->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">Belum Ada Yang Absen</td>
                    </tr>
                @else --}}
                    @foreach ($member as $item)
                        <tr>
                            <td>{{ $item->register->Nama }}</td>
                            <td>{{ date('d M Y', strtotime($item->waktu_absen))  }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @endforeach
                {{-- @endif --}}
            </tbody>
        </table>
        </div>
    </body>

    </html>
@endsection
