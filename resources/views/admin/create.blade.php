@extends('mainmenu')
@section('Halaman Absen')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
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
                        <div class="row">
                            <h4 class="card-title">Tambah Admin</h4>
                        </div>
                        <form action="{{ route('admin.store') }}" class="forms-sample" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" value="" name ="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" value="" name ="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" value="" name ="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama:</label>
                                <div class="col-sm-9">
                                    <input type="nama" class="form-control" id="nama" value="" name ="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hp" class="col-sm-3 col-form-label">No Handphone:</label>
                                <div class="col-sm-9">
                                    <input type="hp" class="form-control" id="hp" value="" name ="hp">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{ url('/admin') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    </html>
@endsection
