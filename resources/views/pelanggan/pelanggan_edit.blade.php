@extends('layouts.admin')
@section('content-admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   Edit Data Pelanggan
                </div>
                <div class="card-body">
                    <form action="{{ url('pelanggan/'.$pelanggan->id,[]) }}" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Kode Pelanggan</label>
                            <input id="my-input" class="form-control" type="text" name="kode_pelanggan"
                                value="{{ $pelanggan->kode_pelanggan ?? old('kode_pelanggan') }}">
                                <span class="text-danger">{{ $errors->first('kode_pelanggan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Nama Pelanggan</label>
                            <input id="my-input" class="form-control" type="text" name="nama_pelanggan"
                                value="{{ $pelanggan->nama_pelanggan ?? old('nama_pelanggan') }}">
                                <span class="text-danger">{{ $errors->first('nama_pelanggan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Nomor Hp</label>
                            <input id="my-input" class="form-control" type="number" name="nomor_hp"
                                value="{{ $pelanggan->nomor_hp ?? old('nomor_hp') }}">
                                <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" type="text" name="email"
                                value="{{ $pelanggan->email ?? old('email') }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Alamat</label>
                            <input id="my-input" class="form-control" type="text" name="alamat"
                                value="{{ $pelanggan->alamat ??old('alamat') }}">
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