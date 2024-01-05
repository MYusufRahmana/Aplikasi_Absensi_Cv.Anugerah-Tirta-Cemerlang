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
                        <h4 class="card-title">Profile Admin</h4>
                        <form action="{{ route('admin.update', $admin->id) }}" class="forms-sample" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama Admin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Nama_admin" value="{{ $admin->nama }}" name ="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="role" value="{{ $admin->username }}" name ="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="role" value="{{ $admin->email }}" name ="email">
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a href="{{ route('admin.index') }}" class="btn btn-warning">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>

    </html>
@endsection
