<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['layanan'] = Layanan::paginate(2);
        $data['judul'] = 'Data-Data Layanan';
        return view('layanan.layanan_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['judul'] = 'Tambah Data Layanan';
        return view('layanan.layanan_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_layanan'=>'required|unique:layanans,kode_layanan',
            'nama_layanan'=>'required',
            'harga_perkg'=>'required',
            'deskripsi'=>'required'
        ]);
        $layanan = new Layanan();
        $layanan->kode_layanan = $request->kode_layanan;
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->harga_perkg = $request->harga_perkg;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->save();
        return redirect('/layanan')->with('pesan','Data Sudah Disimpan');
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
        $data['layanan']=Layanan::findOrFail($id);
        $data['judul'] = 'Edit Data Layanan';
        return view('layanan.layanan_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_layanan'=>'required|unique:layanans,kode_layanan,'.$id,
            'nama_layanan'=>'required',
            'harga_perkg'=>'required',
            'deskripsi'=>'required'
        ]);
        $layanan = Layanan::findOrFail($id);
        $layanan->kode_layanan = $request->kode_layanan;
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->harga_perkg = $request->harga_perkg;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->save();
        return redirect('/layanan')->with('pesan','Data Sudah DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
