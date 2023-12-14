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
                        <h4 class="card-title">Profile</h4>
                        <form action="{{ route('profile.update',$profile->no|| $profile->id) }}" class="forms-sample" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama Member</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" value="{{ $profile->Nama }}" name ="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="Hp" class="col-sm-3 col-form-label">No Handphone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Hp" value="{{ $profile->Hp }}" name ="Hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Ortu" class="col-sm-3 col-form-label">Nama Orang tua</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Ortu" value="{{ $profile->Ortu }}" name ="Ortu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Alamat" value="{{ $profile->Alamat }}" name ="Alamat">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection