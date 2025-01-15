<?php

namespace App\Http\Controllers;

use App\Models\AntarJemput;
use App\Models\Pegawai;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class AntarJemputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['antarjemput'] = \App\Models\AntarJemput::paginate(2);
        $data['judul'] = 'Data-Data Antar Jemput';
        return view('antarjemput.antarjemput_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_pesanan'] = Pesanan::selectRaw("id,kode_pesanan as tampil")
            ->pluck('tampil','id');
        $data['list_kurir'] = Pegawai::selectRaw("id,kode_pegawai as tampil")
            ->pluck('tampil','id');
        $data['list_kurir'] = Pegawai::selectRaw("id, concat(kode_pegawai,'-', nama_pegawai) as
            tampil")->pluck('tampil', 'id');
        $data['list_hp'] = Pegawai::selectRaw("id, concat(kode_pegawai,'-', no_telepon) as
            tampil")->pluck('tampil', 'id');
        return view('antarjemput.antarjemput_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_antarjemput'=>'required|unique:antar_jemputs,kode_antarjemput',
            'pesanan_id'=>'required|exists:pesanans,id',
            'pegawai_id'=>'required|exists:pegawais,id',
            'tgl_pengambilan'=>'required',
            'tgl_pengantaran'=>'required',
            'nama_kurir'=>'required',
            'no_kurir'=>'required'
        ]);
        $antar_jemput = new AntarJemput();
        $antar_jemput->pesanan_id = $request->pesanan_id;
        $antar_jemput->pegawai_id = $request->pegawai_id;
        $antar_jemput->kode_antarjemput = $request->kode_antarjemput ;
        $antar_jemput->tgl_pengambilan= $request->tgl_pengambilan;
        $antar_jemput->tgl_pengantaran = $request->tgl_pengantaran;
        $antar_jemput->nama_kurir = $request->nama_kurir;
        $antar_jemput->no_kurir = $request->no_kurir;
        $antar_jemput->save();
        return redirect('/antarjemput')->with('pesan','Data Sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['antarjemput']=AntarJemput::findOrFail($id);
        $data['list_pesanan'] = Pesanan::selectRaw("id,kode_pesanan as tampil")
            ->pluck('tampil','id');
        $data['list_kurir'] = Pegawai::selectRaw("id,kode_pegawai as tampil")
            ->pluck('tampil','id');
        $data['list_kurir'] = Pegawai::selectRaw("id, concat(kode_pegawai,'-', nama_pegawai) as
            tampil")->pluck('tampil', 'id');
        $data['list_hp'] = Pegawai::selectRaw("id, concat(kode_pegawai,'-', no_telepon) as
            tampil")->pluck('tampil', 'id');
        return view('antarjemput.antarjemput_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_antarjemput'=>'required|unique:antar_jemputs,kode_antarjemput,'.$id,
            'pesanan_id'=>'required|exists:pesanans,id',
            'pegawai_id'=>'required|exists:pegawais,id',
            'tgl_pengambilan'=>'required',
            'tgl_pengantaran'=>'required',
            'nama_kurir'=>'required',
            'no_kurir'=>'required'
        ]);
        $antar_jemput = AntarJemput::findOrFail($id);
        $antar_jemput->pesanan_id = $request->pesanan_id;
        $antar_jemput->pegawai_id = $request->pegawai_id;
        $antar_jemput->kode_antarjemput = $request->kode_antarjemput ;
        $antar_jemput->tgl_pengambilan= $request->tgl_pengambilan;
        $antar_jemput->tgl_pengantaran = $request->tgl_pengantaran;
        $antar_jemput->nama_kurir = $request->nama_kurir;
        $antar_jemput->no_kurir = $request->no_kurir;
        $antar_jemput->save();
        return redirect('/antarjemput')->with('pesan','Data Sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $antar_jemput = AntarJemput::findOrFail($id);
        $antar_jemput->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
