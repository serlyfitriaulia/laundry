<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntarJemput extends Model
{
    use HasFactory;
    public function pegawai() 
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id')->withDefault();
    }
    public function pesanan() 
{
    return $this->belongsTo(Pesanan::class)->withDefault();
}
}

