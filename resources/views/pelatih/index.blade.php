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
                            <th>No</th>
                            <th>Nama</th>
                            <th>Hp</th>
                            <th>Alamat</th>
                            <th colspan="2">Status</th>
                        </tr>
                    </thead>
                    <tbody id="presensiTable">
                        <?php $i=1?>
                        @foreach ($pelatih as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
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
