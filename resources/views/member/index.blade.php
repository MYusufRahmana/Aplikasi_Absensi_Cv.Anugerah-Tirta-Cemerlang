@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Pelatih</title>

        <style>
            .custom {
                float: right;
                margin-right: 3vh
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

    <body>
        <h2>List Member</h2>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                @if ($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success"> {{ session('success') }} </div>
                @endif
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama Member</th>
                            <th>Sekolah</th>
                            <th>Kesehatan</th>
                            <th>Kelas</th>
                            <th>No Handphone</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="presensiTable">
                        @foreach ($member as $item)
                            <tr>
                                <td>{{ $item->Nama }}</td>
                                <td>{{ $item->Sekolah }}</td>
                                <td>{{ $item->Health }}</td>
                                @if ($item->Kelas == '1')
                                    <td>Kelas Pemula - Reguler</td>
                                @endif
                                @if ($item->Kelas == '2')
                                    <td>Kelas Pemula - Group</td>
                                @endif
                                @if ($item->Kelas == '3')
                                    <td>Kelas Pemula - Private</td>
                                @endif
                                @if ($item->Kelas == '4')
                                    <td>Jalur Prestasi</td>
                                @endif
                                {{-- <td>{{ $item->Kelas }}</td> --}}
                                <td>{{ $item->Hp }}</td>
                                @if ($item->status == 1)
                                    <td>Aktif</td>
                                @else
                                    <td>Non-Aktif</td>
                                @endif
                                <td class="">
                                    <a href="{{ route('member.edit', $item->no) }}"><button class="btn btn-warning">Edit</button></a>
                                    <form action="">
                                        @csrf
                                        <input type="submit" value="Hapus" class="btn btn-danger tambah">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    </html>
@endsection
