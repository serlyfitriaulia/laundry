<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;

class DetailPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['detailpesanan'] = \App\Models\DetailPesanan::paginate(2);
        $data['judul'] = 'Data-Data Detail Pesanan';
        return view('detailpesanan.detailpesanan_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_pesanan'] = Pesanan::selectRaw("id, concat(kode_pesanan,'-', tanggal_pesanan) as
        tampil")->pluck('tampil', 'id');
        $data['list_layanan'] = Layanan::selectRaw("id, concat(kode_layanan,'-', nama_layanan) as
        tampil")->pluck('tampil', 'id');
        return view('detailpesanan.detailpesanan_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',
            'layanan_id' => 'required|exists:layanans,id',
            'bobot' => 'required',
            'detail_harga' => 'required'
        ]);
        
        $detail_pesanan = new DetailPesanan();
        $detail_pesanan->pesanan_id = $request->pesanan_id;
        $detail_pesanan->layanan_id = $request->layanan_id;
        $detail_pesanan->bobot= $request->bobot;
        $detail_pesanan->detail_harga = $request->detail_harga;
        $detail_pesanan->save();
        return redirect('/detailpesanan')->with('pesan','Data Sudah Disimpan');
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
        $data['detailpesanan']=DetailPesanan::findOrFail($id);
        $data['list_pesanan'] = Pesanan::selectRaw("id, concat(kode_pesanan,'-', tanggal_pesanan) as
        tampil")->pluck('tampil', 'id');
        $data['list_layanan'] = Layanan::selectRaw("id, concat(kode_layanan,'-', nama_layanan) as
        tampil")->pluck('tampil', 'id');
        return view('detailpesanan.detailpesanan_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',
            'layanan_id' => 'required|exists:layanans,id',
            'bobot' => 'required',
            'detail_harga' => 'required'
        ]);
        
        $detail_pesanan = DetailPesanan::findOrFail($id);
        $detail_pesanan->pesanan_id = $request->pesanan_id;
        $detail_pesanan->layanan_id = $request->layanan_id;
        $detail_pesanan->bobot= $request->bobot;
        $detail_pesanan->detail_harga = $request->detail_harga;
        $detail_pesanan->save();
        return redirect('/detailpesanan')->with('pesan','Data Sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail_pesanan = DetailPesanan::findOrFail($id);
        $detail_pesanan->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
