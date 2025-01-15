@extends('layouts.admin')
@section('content-admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Antar Jemput
                </div>
                <div class="card-body">
                    <form action="{{ url('antarjemput',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Kode Antar Jemput</label>
                            <input id="my-input" class="form-control" type="text" name="kode_antarjemput"
                                value="{{ old('kode_antarjemput') }}">
                                <span class="text-danger">{{ $errors->first('kode_antarjemput') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select" class="font-weight-bold">Kode Pesanan</label>
                            <select id="my-select" class="form-control" name="pesanan_id">
                                <option value="">Pilih Kode Pesanan</option>
                                @foreach ($list_pesanan as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('pesanan_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('pesanan_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-select" class="font-weight-bold">Kode Pegawai</label>
                            <select id="my-select" class="form-control" name="pegawai_id">
                                <option value="">Pilih Pegawai</option>
                                @foreach ($list_kurir as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('pegawai_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('pegawai_id') }}</span>
                        </div>


                        <div class="form-group">
                            <label for="my-input">Tanggal Pengambilan</label>
                            <input id="my-input" class="form-control" type="date" name="tgl_pengambilan"
                                value="{{ old('tgl_pengambilan') }}">
                                <span class="text-danger">{{ $errors->first('tgl_pengambilan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Tanggal Pengantaran</label>
                            <input id="my-input" class="form-control" type="date" name="tgl_pengantaran"
                                value="{{ old('tgl_pengantaran') }}">
                                <span class="text-danger">{{ $errors->first('tgl_pengantaran') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select" class="font-weight-bold">Kurir</label>
                            <select id="my-select" class="form-control" name="nama_kurir">
                                <option value="">Pilih Kurir</option>
                                @foreach ($list_kurir as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('nama_kurir'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('nama_kurir') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-select" class="font-weight-bold">Hp Pegawai</label>
                            <select id="my-select" class="form-control" name="no_kurir">
                                <option value="">Pilih Telepon</option>
                                @foreach ($list_hp as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('no_kurir'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('no_kurir') }}</span>
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