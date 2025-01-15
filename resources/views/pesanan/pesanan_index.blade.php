@extends('layouts.admin')
@section('content-admin')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold" style="background-color:  white">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="text-center">
                                    
                                    <th class="text-center font-weight-bold">Pelanggan</th>
                                    <th  class="text-center font-weight-bold">Kode Pesanan</th>
                                    <th  class="text-center font-weight-bold">Tanggal Pesanan</th>
                                    <th  class="text-center font-weight-bold">Total Pesanan</th>
                                    <th  class="text-center font-weight-bold">Status</th>
                                    <th  class="text-center font-weight-bold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan as $a)
                                    <tr>
                                        
                                        <td>{{ $a->pelanggan->nama_pelanggan }}</td>
                                        <td>{{ $a->kode_pesanan }}</td>
                                        <td>{{ $a->tanggal_pesanan }}</td>
                                        <td>{{ $a->total_pesanan}}</td>
                                        <td>{{ $a->status}}</td>
                                        <td>

                                            <a href="{{ url('pesanan/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('pesanan/' . $a->id, []) }}" method="post"
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
                        {{ $pesanan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection