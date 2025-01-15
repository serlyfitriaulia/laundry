<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pembayaran'] = Pembayaran::paginate(2);
        $data['judul'] = 'Data-Data Pembayaran';
        return view('pembayaran.pembayaran_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $data['list_pesanan'] = Pesanan::selectRaw("id,kode_pesanan as tampil")
            ->pluck('tampil','id');
            $data['list_metode'] = ['Cash','Debit','QRIS', 'Dana', 'Gopay', 'Kartu Kredit'];

        $data['list_status'] = ['Lunas','Belum Lunas'];
        $data['list_total'] = Pesanan::selectRaw("id, concat(kode_pesanan,'-', total_pesanan) as
        tampil")->pluck('tampil', 'id');
        return view('pembayaran.pembayaran_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id'=>'required|exists:pesanans,id',
            'kode_pembayaran'=>'required|unique:pembayarans,kode_pembayaran',
            'tanggal_pembayaran'=>'required',
            'metode_pembayaran'=>'required',
            'total_pembayaran'=>'required',
            'status'=>'required'
            
        ]);
        $pembayaran = new Pembayaran();
        $pembayaran->pesanan_id = $request->pesanan_id;
        $pembayaran->kode_pembayaran = $request->kode_pembayaran;
        $pembayaran->tanggal_pembayaran = $request->tanggal_pembayaran;
        $pembayaran->metode_pembayaran = $request->metode_pembayaran;
        $pembayaran->total_pembayaran = $request->total_pembayaran;
        $pembayaran->status = $request->status;
        $pembayaran->save();
        return redirect('/pembayaran')->with('pesan','Data Sudah Disimpan');
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
        $data['pembayaran']=Pembayaran::findOrFail($id);
        $data['list_pesanan'] = Pesanan::selectRaw("id,kode_pesanan as tampil")
            ->pluck('tampil','id');
        $data['list_status'] = ['Lunas','Belum Lunas'];
        $data['list_metode']= ['Cash','Debit','QRIS', 'Dana', 'Gopay', 'Kartu Kredit'];
        $data['list_total'] = Pesanan::selectRaw("id, concat(kode_pesanan,'-', total_pesanan) as
        tampil")->pluck('tampil', 'id');
        return view('pembayaran.pembayaran_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pesanan_id'=>'required|exists:pesanans,id',
            'kode_pembayaran'=>'required|unique:pembayarans,kode_pembayaran,'.$id,
            'tanggal_pembayaran'=>'required',
            'metode_pembayaran'=>'required',
            'total_pembayaran'=>'required',
            'status'=>'required'

            
        ]);
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->pesanan_id = $request->pesanan_id;
        $pembayaran->kode_pembayaran = $request->kode_pembayaran;
        $pembayaran->tanggal_pembayaran = $request->tanggal_pembayaran;
        $pembayaran->metode_pembayaran = $request->metode_pembayaran;
        $pembayaran->total_pembayaran = $request->total_pembayaran;
        $pembayaran->status = $request->status;

        $pembayaran->save();
        return redirect('/pembayaran')->with('pesan','Data Sudah Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
