@extends('layouts.admin')
@section('content-admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <form action="{{ url('pelanggan',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Kode Pelanggan</label>
                            <input id="my-input" class="form-control" type="text" name="kode_pelanggan"
                                value="{{ old('kode_pelanggan') }}">
                                <span class="text-danger">{{ $errors->first('kode_pelanggan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Nama Pelanggan</label>
                            <input id="my-input" class="form-control" type="text" name="nama_pelanggan"
                                value="{{ old('nama_pelanggan') }}">
                                <span class="text-danger">{{ $errors->first('nama_pelanggan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Nomor Hp</label>
                            <input id="my-input" class="form-control" type="text" name="nomor_hp"
                                value="{{ old('nomor_hp') }}">
                                <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" type="text" name="email"
                                value="{{ old('email') }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Alamat</label>
                            <input id="my-input" class="form-control" type="text" name="alamat"
                                value="{{ old('alamat') }}">
                                <span class="text-danger">{{ $errors->first('alamat') }}</span>

                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection