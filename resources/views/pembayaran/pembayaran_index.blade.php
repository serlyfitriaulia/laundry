@extends('layouts.admin')
@section('content-admin')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold" style="background-color: white">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center font-weight-bold">Kode Pembayaran</th>
                                    <th class="text-center font-weight-bold">Kode Pesanan</th>
                                    <th class="text-center font-weight-bold">Tanggal Pembayaran</th>
                                    <th class="text-center font-weight-bold">Total Pembayaran</th>
                                    <th class="text-center font-weight-bold">Metode Pembayaran</th>
                                    <th class="text-center font-weight-bold">Status</th>
                                    <th class="text-center font-weight-bold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembayaran as $a)
                                    <tr>
                                        
                                        <td>{{ $a->kode_pembayaran }}</td>
                                        <td>{{ $a->pesanan->kode_pesanan}}</td>
                                        <td>{{ $a->tanggal_pembayaran }}</td>
                                        <td>{{ $a->pesanan->total_pesanan}}</td>
                                        <td>{{ $a->metode_pembayaran }}</td>
                                        <td>{{ $a->status}}</td>
                                        <td>

                                            <a href="{{ url('pembayaran/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('pembayaran/' . $a->id, []) }}" method="post"
                                                class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $pembayaran->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection