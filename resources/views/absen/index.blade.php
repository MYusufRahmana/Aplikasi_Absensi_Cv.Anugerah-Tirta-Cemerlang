@extends('mainmenu')
@section('Halaman Absen')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Absen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            background-color: #808080;
            border-color: #808080;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
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
        {{-- @if (Session::has('success'))
                <h1>{{ Session::get('success') }}</h1>
        @endif --}}
    <a href="#" class="btn add-btn" onclick="openPresensiForm()"><i class="bi bi-upc-scan"></i> Presensi Mandiri</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Waktu</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="presensiTable">
            @foreach($absensi as $absensi_member)
            <tr>

                <td>{{ $absensi_member->waktu_absen }}</td>
                <td>{{ $absensi_member->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form presensi mandiri -->
    <form action="{{route('absen.store')}}" method="post">
        @csrf
        <div class="presensi-form" id="presensiForm">
            <div class="form-content">
                <span class="close-btn" onclick="closePresensiForm()">&times;</span>
                <h3 class="text-center">Form Presensi Mandiri</h3>
                <div class="radio-group">
                    <div class="radio-label">
                        <input type="radio" id="hadir" name="status" value="hadir" required>
                        <label for="hadir">Hadir</label>
                    </div>
                    <div class="radio-label">
                        <input type="radio" id="izin" name="status" value="izin" required>
                        <label for="tidakHadir">Izin</label>
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
