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
                        <form action="{{ route('member.update',$member->no) }}" class="forms-sample" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Nama" class="col-sm-3 col-form-label">Nama Member</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Nama" value="{{ $member->Nama }}" placeholder="Masukkan Nama Member" name ="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="Sekolah" class="col-sm-3 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Sekolah" placeholder="Masukkan Asal Sekolah" value="{{ $member->Sekolah }}" name ="Sekolah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Health" class="col-sm-3 col-form-label">Kesehatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-number" id="Health" value="{{ $member->Health }}" placeholder="Masukan Kesehatan" name ="Health">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Kelas" class="col-sm-3 col-form-label">Kelas</label>
                                <div class="col-sm-9">
                                    <select name="Kelas" id="Kelas" class="form-control form-select">
                                        <option value="1">Kelas Pemula - Reguler</option>
                                        <option value="2">Kelas Pemula - Group</option>
                                        <option value="3">Kelas Pemula - Private</option>
                                        <option value="4">Jalur Prestasi</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{ route('member.index') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection