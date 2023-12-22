<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.style')
    <style>
        body {
            background-color: white
        }
        .table-striped {
            background-color: #DBDFEA;
        }
    </style>
    <title>Laporan Pelatih</title>
</head>

<body>
    <div class="fluids text-center">
        <h5>Laporan Pelatih</h5>
    </div>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama Pelatih</th>
                <th>Total Gaji</th>
            </tr>
        </thead>
        <tbody id="presensiTable">
            @php $i=1 @endphp
            @foreach ($pelatih as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$item->Nama_Pelatih}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('layouts.script')
</body>

</html>
