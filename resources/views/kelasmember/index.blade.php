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
        <form action="{{ route('kelasmember.index') }}">
            <div class="form-select">
                <select name="kelas" id="kelas" class="form-control">
                    <option value="1" {{ request()->get('kelas') == '1' ? 'selected' : '' }}>Kelas Pemula - Pemula
                    </option>
                    <option value="2" {{ request()->get('kelas') == '2' ? 'selected' : '' }}>Kelas Pemula - Group
                    </option>
                    <option value="3" {{ request()->get('kelas') == '3' ? 'selected' : '' }}>Kelas Pemula - Private
                    </option>
                    <option value="4" {{ request()->get('kelas') == '4' ? 'selected' : '' }}>Jalur Prestasi</option>
                </select>
            </div>
            <a href="{{ route('kelasmember.create') }}" class="btn btn-success" style="float: right; margin-top:1rem">Tambah</a>
            <input type="submit" value="Tampilkan" class="btn btn-info"
                style="float: right; margin-top:1rem; margin-bottom:-1rem;">
        </form>


        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Member</th>
                    <th>Gender</th>
                    <th>Sekolah</th>
                    <th>No.Handphone</th>
                    <th>Kelas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if ($kelas_member->isEmpty())
                    <tr>
                        <td colspan="6">Silahkan Pilih Kelas</td>
                    </tr>
                @else
                    <?php $i = 1; ?>
                    @foreach ($kelas_member as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->member->Nama }}</td>
                            <td>{{ $item->member->Gender ==1 ?"Laki-Laki":"Perempuan"}}</td>
                            <td>{{ $item->member->Sekolah }}</td>
                            <td>{{ $item->member->Hp }}</td>
                            @if ($item->kelas == 1)
                                <td>Kelas Pemula - Pemula</td>
                            @elseif ($item->kelas == 2)
                                <td>Kelas Pemula - Group</td>
                            @elseif ($item->kelas == 3)
                                <td>Kelas Pemula - Private</td>
                            @elseif ($item->kelas == 4)
                                <td>Jalur Prestasi</td>
                            @endif
                            <td>
                                {{ $item->status == "1" ? "Selesai" : "Berjalan" }}
                            </td>
                        <tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </body>

    </html>

@endsection
