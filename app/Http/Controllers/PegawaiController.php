<?php

namespace App\Http\Controllers;

use App\Models\AntarJemput;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pegawai'] = Pegawai::paginate(2);
        $data['judul'] = 'Data-Data Pegawai';
        return view('pegawai.pegawai_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['judul']='Tambah Data Pegawai';
        $data['list_jk']= ['Perempuan','Laki-Laki'];
        return view('pegawai.pegawai_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pegawai'=>'required',
            'nama_pegawai'=>'required',
            'jenis_kelamin'=>'required',
            'no_telepon'=>'required',
            'email'=>'required|unique:pelanggans,email',
            'alamat'=>'required'
        ]);
        $pegawai = new Pegawai();
        $pegawai->kode_pegawai = $request->kode_pegawai;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->no_telepon = $request->no_telepon;
        $pegawai->email = $request->email;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai')->with('pesan','Data Sudah Disimpan');

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
        $data['pegawai'] = Pegawai::findOrFail($id);
        $data['judul'] = 'Data-Data Pegawai';
        $data['list_jk']= ['Perempuan','Laki-Laki'];

        return view('pegawai.pegawai_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_pegawai'=>'required',
            'nama_pegawai'=>'required',
            'no_telepon'=>'required',
            'jenis_kelamin'=>'required',
            'email'=>'required|unique:pelanggans,email',
            'alamat'=>'required'
        ]);
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->kode_pegawai = $request->kode_pegawai;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->no_telepon = $request->no_telepon;
        $pegawai->email = $request->email;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai')->with('pesan','Data Sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
