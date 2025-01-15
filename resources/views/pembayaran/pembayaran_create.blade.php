@extends('layouts.admin')
@section('content-admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pembayaran
                </div>
                <div class="card-body">
                    <form action="{{ url('pembayaran',[]) }}" method="POST">

                        @method('POST')
                        @csrf


                        <div class="form-group">
                            <label for="my-input">Kode Pembayaran</label>
                            <input id="my-input" class="form-control" type="text" name="kode_pembayaran"
                                value="{{ old('kode_pembayaran') }}">
                                <span class="text-danger">{{ $errors->first('kode_pembayaran') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Kode Pesanan</label>
                            <select id="my-select" class="form-control" name="pesanan_id">
                                <option value="">Pilih Pesanan</option>
                                @foreach ($list_pesanan as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('pesanan_id'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('pesanan_id') }}</span>

                        </div>


                        <div class="form-group">
                            <label for="my-input">Tanggal Pembayaran</label>
                            <input id="my-input" class="form-control" type="date" name="tanggal_pembayaran"
                                value="{{ old('tanggal_pembayaran') }}">
                                <span class="text-danger">{{ $errors->first('tanggal_pembayaran') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Total Pembayaran</label>
                            <select id="my-select" class="form-control" name="total_pembayaran">
                                <option value="">Pilih Total</option>
                                @foreach ($list_total as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('total_pembayaran'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('total_pembayaran') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-control">
                                @foreach ($list_metode as $metode)
                                    <option value="{{ $metode }}" {{ old('metode_pembayaran', $pembayaran->metode_pembayaran ?? '') == $metode ? 'selected' : '' }}>
                                        {{ $metode }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('metode_pembayaran') }}</span>

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