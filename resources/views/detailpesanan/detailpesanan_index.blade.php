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
                                    
                                    <th  class="text-center font-weight-bold">Tanggal Pesanan</th>
                                    <th  class="text-center font-weight-bold">Nama Layanan</th>
                                    <th  class="text-center font-weight-bold">Berat</th>
                                    <th  class="text-center font-weight-bold">Harga</th>
                                    <th  class="text-center font-weight-bold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detailpesanan as $a)
                                    <tr>
                                        
                                        <td>{{ $a->pesanan->tanggal_pesanan }}</td>
                                        <td>{{ $a->layanan->nama_layanan }}</td>
                                        <td>{{ $a->bobot }}</td>
                                        <td>{{ $a->detail_harga}}</td>
                                        <td>

                                            <a href="{{ url('detailpesanan/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('detailpesanan/' . $a->id, []) }}" method="post"
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
                        {{ $detailpesanan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection