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
                                    
                                    <th class="text-center font-weight-bold">Kode Pegawai</th>
                                    <th class="text-center font-weight-bold">Nama Pegawai</th>
                                    <th class="text-center font-weight-bold">Jenis Kelamin</th>
                                    <th class="text-center font-weight-bold">No Hp</th>
                                    <th class="text-center font-weight-bold">Email</th>
                                    <th class="text-center font-weight-bold">Alamat</th>
                                    <th class="text-center font-weight-bold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawai as $a)
                                    <tr>
                                        
                                        <td>{{ $a->kode_pegawai }}</td>
                                        <td>{{ $a->nama_pegawai}}</td>
                                        <td>{{ $a->jenis_kelamin}}</td>
                                        <td>{{ $a->no_telepon }}</td>
                                        <td>{{ $a->email}}</td>
                                        <td>{{ $a->alamat}}</td>
                                        <td>

                                            <a href="{{ url('pegawai/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('pegawai/' . $a->id, []) }}" method="post"
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
                        {{ $pegawai->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection