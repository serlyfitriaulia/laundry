@extends('layouts.admin')
@section('content-admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Detail
                </div>
                <div class="card-body">
                    <form action="{{ url('detailpesanan',[]) }}" method="POST">

                        @method('POST')
                        @csrf


                        <div class="form-group">
                            <label for="my-select" class="font-weight-bold">Tanggal Pesanan</label>
                            <select id="my-select" class="form-control" name="pesanan_id">
                                <option value="">Pilih Waktu Pesanan</option>
                                @foreach ($list_pesanan as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('pesanan_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('pesanan_id') }}</span>
                        </div>


                        <div class="form-group">
                            <label for="my-select" class="font-weight-bold">Nama Layanan</label>
                            <select id="my-select" class="form-control" name="layanan_id">
                                <option value="">Pilih Layanan</option>
                                @foreach ($list_layanan as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('layanan_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('layanan_id') }}</span>
                        </div>


                        <div class="form-group">
                            <label for="my-input">Bobot</label>
                            <input id="my-input" class="form-control" type="number" name="bobot"
                                value="{{ old('bobot') }}">
                                <span class="text-danger">{{ $errors->first('bobot') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Detail Harga</label>
                            <input id="my-input" class="form-control" type="number" name="detail_harga"
                                value="{{ old('detail_harga') }}">
                                <span class="text-danger">{{ $errors->first('detail_harga') }}</span>

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