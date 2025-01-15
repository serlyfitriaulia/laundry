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
                                    
                                    <th class="text-center font-weight-bold">Kode Layanan</th>
                                    <th class="text-center font-weight-bold">Nama Layanan</th>
                                    <th class="text-center font-weight-bold">Harga Per-kg</th>
                                    <th class="text-center font-weight-bold">Deskripsi</th>
                                    <th class="text-center font-weight-bold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($layanan as $a)
                                    <tr>
                                        
                                        <td>{{ $a->kode_layanan }}</td>
                                        <td>{{ $a->nama_layanan }}</td>
                                        <td>{{ $a->harga_perkg }}</td>
                                        <td>{{ $a->deskripsi}}</td>
                                        <td>

                                            <a href="{{ url('layanan/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('layanan/' . $a->id, []) }}" method="post"
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
                        {{ $layanan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection