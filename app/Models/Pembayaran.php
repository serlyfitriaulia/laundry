<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $dates = ['tanggal_pembayaran'];
    public $timestamps = false;
    protected $fillable = [
        'pesanan_id',
        'kode_pembayaran',
        'tanggal_pembayaran',
        'metode_pembayaran',
        'total_pembayaran',
        'status'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class)->withDefault();
    }
}
