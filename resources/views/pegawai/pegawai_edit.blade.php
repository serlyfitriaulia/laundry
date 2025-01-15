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
                    <form action="{{ url('pegawai/'.$pegawai->id,[]) }}" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Kode Pegawai</label>
                            <input id="my-input" class="form-control" type="text" name="kode_pegawai"
                                value="{{ $pegawai->kode_pegawai ?? old('kode_pegawai') }}">
                                <span class="text-danger">{{ $errors->first('kode_pegawai') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Nama Pegawai</label>
                            <input id="my-input" class="form-control" type="text" name="nama_pegawai"
                                value="{{ $pegawai->nama_pegawai ?? old('nama_pegawai') }}">
                                <span class="text-danger">{{ $errors->first('nama_pegawai') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                @foreach ($list_jk as $a)
                                <option value="{{ $a }}" @selected($a==$pegawai->jenis_kelamin)>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-input">Nomor Hp</label>
                            <input id="my-input" class="form-control" type="text" name="no_telepon"
                                value="{{$pegawai->no_telepon ?? old('no_telepon') }}">
                                <span class="text-danger">{{ $errors->first('no_telepon') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" type="text" name="email"
                                value="{{$pegawai->email ??  old('email') }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Alamat</label>
                            <input id="my-input" class="form-control" type="text" name="alamat"
                                value="{{$pegawai->alamat ??  old('alamat') }}">
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