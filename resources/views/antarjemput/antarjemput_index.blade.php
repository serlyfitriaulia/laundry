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
                                    
                                    <th class="text-center font-weight-bold">Kode Antar Jemput</th>
                                    <th class="text-center font-weight-bold">Kode Pesanan</th>
                                    <th class="text-center font-weight-bold">Kode Pegawai</th>
                                    <th class="text-center font-weight-bold">Tanggal Pengambilan</th>
                                    <th class="text-center font-weight-bold">Tanggal Pengantaran</th>
                                    <th class="text-center font-weight-bold">Nama Pegawai</th>
                                    <th class="text-center font-weight-bold">Telepon Pegawai</th>
                                    <th class="text-center font-weight-bold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($antarjemput as $a)
                                    <tr>
                                        
                                        <td>{{ $a->kode_antarjemput }}</td>
                                        <td>{{ $a->pesanan->kode_pesanan }}</td>
                                        <td>{{ $a->pegawai->kode_pegawai }}</td>
                                        <td>{{ $a->tgl_pengambilan}}</td>
                                        <td>{{ $a->tgl_pengantaran}}</td>
                                        <td>{{ $a->pegawai->nama_pegawai}}</td>
                                        <td>{{ $a->pegawai->no_telepon}}</td>
                                        <td>

                                            <a href="{{ url('antarjemput/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('antarjemput/' . $a->id, []) }}" method="post"
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
                        {{ $antarjemput->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection