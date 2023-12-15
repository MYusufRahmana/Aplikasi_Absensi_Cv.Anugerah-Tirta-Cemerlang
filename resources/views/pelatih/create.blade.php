@extends('mainmenu')
@section('Halaman Absen')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .form-control {
            width:300px
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            {!!  implode('',$errors->all('<div>:message</div>')) !!}
                        @endif
                        <div class="row">
                            <h4 class="card-title">Tambah Pelatih</h4>
                        </div>
                        <form action="{{ route('pelatih.store') }}" class="forms-sample" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="Nama_Pelatih" class="col-sm-3 col-form-label">Nama Pelatih :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Nama_Pelatih" value="" name ="Nama_Pelatih">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="Hp" class="col-sm-3 col-form-label">No Handphone:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Hp" value="" name ="Hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Alamat" class="col-sm-3 col-form-label">Alamat:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Alamat" value="" name ="Alamat">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="col-sm-3 col-form-label">Email:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Email" value="" name ="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" value="" name ="password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{ url('/pelatih') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection