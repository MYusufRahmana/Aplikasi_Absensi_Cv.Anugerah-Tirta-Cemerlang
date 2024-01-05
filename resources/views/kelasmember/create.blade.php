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
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        <div class="row">
                            <h4 class="card-title">Tambah Member dalam Kelas</h4>
                        </div>
                        <form action="{{ route('kelasmember.store') }}" class="forms-sample" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="Nama_Pelatih" class="col-sm-3 col-form-label">Nama Member :</label>
                                <div class="col-sm-9">
                                    <select name="no" id="no" class="form-control">
                                        @foreach ($member as $item)
                                            <option value="{{ $item->no }}">{{ $item->Nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kelas" class="col-sm-3 col-form-label">Kelas:</label>

                                <div class="col-sm-9">
                                    <select name="kelas" id="" class=" form-control">
                                        <option value="1">Kelas Renang - Pemula</option>
                                        <option value="2">Kelas Renang - Group</option>
                                        <option value="3">Kelas Renang - Private</option>
                                        <option value="4">Jalur Prestasi</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{ url('/kelasmember') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    </html>
@endsection
