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

            .presensi-form {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.4);
                padding-top: 50px;
            }

            .form-content {
                background-color: #fefefe;
                margin: 10% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 50%;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            .close-btn {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
            }

            .submit-btn {
                background-color: #4CAF50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .submit-btn:hover {
                background-color: #45a049;
            }

            .radio-group {
                display: flex;
                justify-content: space-evenly;
                margin-top: 15px;
            }

            .radio-label {
                display: flex;
                align-items: center;
            }

            .radio-label input {
                margin-right: 5px;
            }
        </style>

        <!-- Option 1: Include in HTML -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

    <body>
        <h5>List Kelas</h5>
        <form action="{{ route('kelasmember.index') }}" method="GET">
            @csrf
            <div class="form-select">
                <select name="kelas" id="kelas" class="form-control">
                    <option value="1">Kelas Pemula - Pemula</option>
                    <option value="2">Kelas Pemula - Group</option>
                    <option value="3">Kelas Pemula - Private</option>
                    <option value="4">Jalur Prestasi</option>
                </select>
            </div>
            <input type="submit" value="Tampilkan" class="btn btn-info" style="float: right; margin-top:1rem; margin-bottom:-1rem;">
        </form>
        {{-- @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('warning'))
            <div class="alert alert-warning">{{ Session::get('warning') }}</div>
        @endif --}}

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama Member</th>
                    <th>Gender</th>
                    <th>Sekolah</th>
                    <th>No.Handphone</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @if ($kelas->isEmpty())
                    <tr>
                        <td colspan="5">Silahkan Pilih Kelas</td>
                    </tr>
                @else
                    @foreach ($kelas as $item)
                        <td>{{ $item->Nama }}</td>
                        <td>{{ $item->Gender }}</td>
                        <td>{{ $item->Sekolah }}</td>
                        <td>{{ $item->Hp }}</td>
                        @if ($item->Kelas == 1)
                            <td>Kelas Pemula - Pemula</td>
                        @endif
                        @if ($item->Kelas == 2)
                            <td>Kelas Pemula - Group</td>
                        @endif
                        @if ($item->Kelas == 3)
                            <td>Kelas Pemula - Private</td>
                        @endif
                        @if ($item->Kelas == 4)
                            <td>Jalur Prestasi</td>
                        @endif
                    @endforeach
                @endif
                <tr>
            </tbody>
        </table>
    </body>

    </html>

@endsection
