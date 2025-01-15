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
                                    
                                    <th class="text-center font-weight-bold">Kode Pelanggan</th>
                                    <th class="text-center font-weight-bold">Nama Pelanggan</th>
                                    <th class="text-center font-weight-bold">Nomor Hp</th>
                                    <th class="text-center font-weight-bold">Email</th>
                                    <th class="text-center font-weight-bold">Alamat</th>
                                    <th class="text-center font-weight-bold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelanggan as $a)
                                    <tr>
                                        
                                        <td>{{ $a->kode_pelanggan }}</td>
                                        <td>{{ $a->nama_pelanggan}}</td>
                                        <td>{{ $a->nomor_hp }}</td>
                                        <td>{{ $a->email}}</td>
                                        <td>{{ $a->alamat}}</td>
                                        <td>

                                            <a href="{{ url('pelanggan/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('pelanggan/' . $a->id, []) }}" method="post"
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
                        {{ $pelanggan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection