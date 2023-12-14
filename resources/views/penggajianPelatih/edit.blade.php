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
                        @if (Session::has('success'))
                        <div class="alert alert-success"> {{session('success') }} </div> 
                        @endif
                        <h4 class="card-title">Profile Gaji Pelatih</h4>
                        <form action="{{ route('penggajianpelatih.update',$pelatih->id) }}" class="forms-sample" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Nama_Pelatih" class="col-sm-3 col-form-label">Nama Pelatih</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Nama_Pelatih" value="{{ $pelatih->Nama_Pelatih }}" name ="Nama_Pelatih" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="role" class="col-sm-3 col-form-label">Peran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="role" value="{{ $pelatih->role }}" name ="role" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gaji" class="col-sm-3 col-form-label">Gaji</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-number" id="gaji" value="{{ $pelatih->gaji }}" placeholder="Masukkan Gaji" name ="gaji">
                                </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{ route('penggajianpelatih.index') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection