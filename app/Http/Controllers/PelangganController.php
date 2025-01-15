<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pelanggan'] = Pelanggan::paginate(2);
        $data['judul'] = 'Data-Data Pelanggan';
        return view('pelanggan.pelanggan_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['judul'] = 'Tambah Data Pelanggan';
        return view('pelanggan.pelanggan_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pelanggan'=>'required|unique:pelanggans,kode_pelanggan',
            'nama_pelanggan'=>'required',
            'nomor_hp'=>'required',
            'email'=>'required|unique:pelanggans,email',
            'alamat'=>'required'
        ]);
        $pelanggan = new Pelanggan();
        $pelanggan->kode_pelanggan = $request->kode_pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->nomor_hp = $request->nomor_hp;
        $pelanggan->email = $request->email;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();
        return redirect('/pelanggan')->with('pesan','Data Sudah Disimpan');

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
        $data['pelanggan']=Pelanggan::findOrFail($id);
        $data['judul'] = 'Edit Data Pelanggan';
        return view('pelanggan.pelanggan_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_pelanggan'=>'required|unique:pelanggans,kode_pelanggan,'.$id,
            'nama_pelanggan'=>'required',
            'nomor_hp'=>'required',
            'email'=>'required|unique:pelanggans,email,'.$id,
            'alamat'=>'required'
        ]);
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->kode_pelanggan = $request->kode_pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->nomor_hp = $request->nomor_hp;
        $pelanggan->email = $request->email;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();
        return redirect('/pelanggan')->with('pesan','Data Sudah Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
