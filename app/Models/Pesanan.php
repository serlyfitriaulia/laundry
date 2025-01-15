<?php

namespace App\Models;

use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;
    public function antarjemput() 
    {
    return $this->hasMany(AntarJemput::class);
    }
    public function pelanggan() 
    {
    return $this->belongsTo(Pelanggan::class)->withDefault();
    }
    public function pembayaran() 
    {
    return $this->hasMany(Pembayaran::class);
    }
    public function detailpesanan() 
    {
    return $this->hasMany(DetailPesanan::class);   
    }
}
