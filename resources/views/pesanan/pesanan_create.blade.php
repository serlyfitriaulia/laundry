@extends('layouts.admin')
@section('content-admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pesanan
                </div>
                <div class="card-body">
                    <form action="{{ url('pesanan',[]) }}" method="POST">

                        @method('POST')
                        @csrf


                        <div class="form-group">
                            <label for="my-select">Pelanggan</label>
                            <select id="my-select" class="form-control" name="pelanggan_id">
                                <option value="">Pilih Pelanggan</option>
                                @foreach ($list_pelanggan as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('pelanggan_id'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('pelanggan_id') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Kode Pesanan</label>
                            <input id="my-input" class="form-control" type="text" name="kode_pesanan"
                                value="{{ old('kode_pesanan') }}">
                                <span class="text-danger">{{ $errors->first('nama_layanan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Tanggal Pesanan</label>
                            <input id="my-input" class="form-control" type="date" name="tanggal_pesanan"
                                value="{{ old('tanggal_pesanan') }}">
                                <span class="text-danger">{{ $errors->first('tanggal_pesanan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Total Pesanan</label>
                            <input id="my-input" class="form-control" type="number" name="total_pesanan"
                                value="{{ old('total_pesanan') }}">
                                <span class="text-danger">{{ $errors->first('total_pesanan') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Status</label>
                            <select id="my-select" class="form-control" name="status">
                                @foreach ($list_status as $a)
                                <option value="{{ $a }}" @selected($a==old('status'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>

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