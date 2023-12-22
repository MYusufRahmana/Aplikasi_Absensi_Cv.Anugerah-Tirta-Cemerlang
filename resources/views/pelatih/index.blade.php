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
        <h2>List Pelatih</h2>
        <form action="{{ route('pelatih.create') }}">
            @csrf
            <input type="submit" class="custom btn btn-success" value="Tambah">
        </form>
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
                            <th>Nama</th>
                            <th>Hp</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="presensiTable">
                        @foreach ($pelatih as $item)
                            <tr>
                                <td>{{ $item->Nama_Pelatih }}</td>
                                <td>{{ $item->Hp }}</td>
                                <td>{{ $item->Alamat }}</td>
                                @if ($item->status==1)
                                    <td>Aktif</td>
                                @else
                                    <td>Non-Aktif</td>    
                                @endif
                                <td class="">
                                    <a href="{{ route('pelatih.edit', $item->id) }}"><button class="btn btn-warning">Edit</button></a>
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
