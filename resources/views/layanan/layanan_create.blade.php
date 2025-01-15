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
                    <form action="{{ url('layanan',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Kode Layanan</label>
                            <input id="my-input" class="form-control" type="text" name="kode_layanan"
                                value="{{ old('kode_layanan') }}">
                                <span class="text-danger">{{ $errors->first('kode_layanan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Nama Layanan</label>
                            <input id="my-input" class="form-control" type="text" name="nama_layanan"
                                value="{{ old('nama_layanan') }}">
                                <span class="text-danger">{{ $errors->first('nama_layanan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Harga Perkg</label>
                            <input id="my-input" class="form-control" type="number" name="harga_perkg"
                                value="{{ old('harga_perkg') }}">
                                <span class="text-danger">{{ $errors->first('harga_perkg') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Deskripsi</label>
                            <input id="my-input" class="form-control" type="text" name="deskripsi"
                                value="{{ old('deskripsi') }}">
                                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>

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