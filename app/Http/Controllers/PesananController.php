<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pesanan'] = \App\Models\Pesanan::paginate(2);
        $data['judul'] = 'Data-Data Pesanan';
        return view('pesanan.pesanan_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_pelanggan'] = Pelanggan::selectRaw("id, concat(kode_pelanggan,'-', nama_pelanggan) as
        tampil")->pluck('tampil', 'id');
        $data['list_status']= ['Selesai','Proses','Dibatalkan'];
        return view('pesanan.pesanan_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id'=>'required|exists:pelanggans,id',
            'kode_pesanan'=>'required|unique:pesanans,kode_pesanan',
            'tanggal_pesanan'=>'required',
            'total_pesanan'=>'required',
            'status'=>'required'
        ]);
        $pesanan = new Pesanan();
        $pesanan->pelanggan_id = $request->pelanggan_id;
        $pesanan->kode_pesanan = $request->kode_pesanan;
        $pesanan->tanggal_pesanan = $request->tanggal_pesanan;
        $pesanan->total_pesanan = $request->total_pesanan;
        $pesanan->status = $request->status;
        $pesanan->save();
        return redirect('/pesanan')->with('pesan','Data Sudah Disimpan');
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
        $data['pesanan']=Pesanan::findOrFail($id);
        $data['list_pelanggan'] = Pelanggan::selectRaw("id, concat(kode_pelanggan,'-', nama_pelanggan) as
        tampil")->pluck('tampil', 'id');
        $data['list_status']= ['Selesai','Proses','Dibatalkan'];
        return view('pesanan.pesanan_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'pelanggan_id'=>'required|exists:pelanggans,id',
            'kode_pesanan'=>'required|unique:pesanans,kode_pesanan,'.$id,
            'tanggal_pesanan'=>'required',
            'total_pesanan'=>'required',
            'status'=>'required'
        ]);
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->pelanggan_id = $request->pelanggan_id;
        $pesanan->kode_pesanan = $request->kode_pesanan;
        $pesanan->tanggal_pesanan = $request->tanggal_pesanan;
        $pesanan->total_pesanan = $request->total_pesanan;
        $pesanan->status = $request->status;
        $pesanan->save();
        return redirect('/pesanan')->with('pesan','Data Sudah DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
