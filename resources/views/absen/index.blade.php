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
        <h2>Pertemuan</h2>
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('warning'))
            <div class="alert alert-warning">{{ Session::get('warning') }}</div>
        @endif
        <a href="#" class="btn add-btn" onclick="openPresensiForm()"><i class="bi bi-upc-scan"></i> Presensi Mandiri</a>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="presensiTable">
                <tr>
                    @if (Session::get('member')->Kelas == '1')
                        Kelas Pemula - Reguler
                        <p>Pelatih :
                            @if ($pelatih1->isEmpty())
                                -
                            @else
                                @foreach ($pelatih1 as $item)
                                    {{ $item->Nama_Pelatih }},
                                @endforeach
                            @endif
                        </p>
                    @endif
                    @if (Session::get('member')->Kelas == '2')
                        Kelas Pemula - Group
                        <p>Pelatih :
                            @if ($pelatih2->isEmpty())
                                -
                            @else
                                @foreach ($pelatih2 as $item)
                                    {{ $item->Nama_Pelatih }},
                                @endforeach
                            @endif
                        </p>
                    @endif
                    @if (Session::get('member')->Kelas == '3')
                        Kelas Pemula - Private
                        <p>
                            <p>Pelatih :
                                @if ($pelatih3->isEmpty())
                                    -
                                @else
                                    @foreach ($pelatih3 as $item)
                                        {{ $item->Nama_Pelatih }},
                                    @endforeach
                                @endif
                            </p>
                        </p>
                    @endif
                    @if (Session::get('member')->Kelas == '4')
                        Jalur Prestasi
                        <p>Pelatih :
                            @if ($pelatih4->isEmpty())
                                -
                            @else
                                @foreach ($pelatih4 as $item)
                                    {{ $item->Nama_Pelatih }},
                                @endforeach
                            @endif
                        </p>
                    @endif
                </tr>
                @if ($absensi->isEmpty())
                    <tr>
                        <td colspan="4">Silahkan Melakukan Absensi</td>
                    </tr>
                @else
                    <?php $i = 1; ?>
                    @foreach ($absensi as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->register->Nama }}</td>
                            <td>{{ date('d M Y', strtotime($item->waktu_absen)) }}</td>
                            <td style="background-color: {{ $item->status == 'Hadir' ? '#4CAF50' : ($item->status == 'Izin' ? '#FFD700' : 'transparent') }}; color: black;">{{ $item->status }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <!-- Form presensi mandiri -->
        <form action="{{ route('absen.store', Session::get('member')->no) }}" method="post">
            @csrf
            <div class="presensi-form" id="presensiForm">
                <div class="form-content">
                    <span class="close-btn" onclick="closePresensiForm()">&times;</span>
                    <h3 class="text-center">Form Presensi Mandiri</h3>
                    <div class="radio-group">
                        <div class="radio-label">
                            <input type="radio" id="hadir" name="status" value="Hadir" required>
                            <label for="hadir">Hadir</label>
                        </div>
                    </div>
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <script>
            function openPresensiForm() {
                document.getElementById('presensiForm').style.display = 'block';
            }

            function closePresensiForm() {
                document.getElementById('presensiForm').style.display = 'none';
            }

            window.onclick = function(event) {
                if (event.target === document.getElementById('presensiForm')) {
                    closePresensiForm();
                }
            }
        </script>
    </body>

    </html>

@endsection
