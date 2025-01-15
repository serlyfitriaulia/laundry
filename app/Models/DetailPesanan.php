<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;
    public function pesanan() 
{
    return $this->belongsTo(Pesanan::class)->withDefault();
}
    public function layanan() 
{
    return $this->belongsTo(Layanan::class)->withDefault();
}
}
