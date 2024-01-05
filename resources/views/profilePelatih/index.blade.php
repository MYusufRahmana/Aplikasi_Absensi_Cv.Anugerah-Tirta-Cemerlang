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
                width: 300px
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success"> {{ session('success') }} </div>
                        @endif
                        <h4 class="card-title">Profile Pelatih</h4>
                        <form action="{{ route('profilepelatih.update', $pelatih->id) }}" class="forms-sample" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Nama_Pelatih" class="col-sm-3 col-form-label">Nama Pelatih</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Nama_Pelatih" value="{{ $pelatih->Nama_Pelatih }}" name ="Nama_Pelatih">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Hp" class="col-sm-3 col-form-label">No Handphone</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="Hp" value="{{ $pelatih->Hp }}" name ="Hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" value="{{ $pelatih->Email }}" name ="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                                <div class="col-sm-9">
                                    <select name="kelas" id="kelas" class="form-control">
                                        <option value="1">Kelas Renang - Pemula</option>
                                        <option value="2">Kelas Renang - Group</option>
                                        <option value="3">Kelas Renang - Private</option>
                                        <option value="4">Jalur Prestasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Alamat" value="{{ $pelatih->Alamat }}" name ="Alamat">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{ url('/dashboard') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    </html>
@endsection
