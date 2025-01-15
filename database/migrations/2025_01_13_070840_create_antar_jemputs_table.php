<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('antar_jemputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanans')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('pegawai_id')->constrained('pegawais')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_antarjemput')->unique();
            $table->date('tgl_pengambilan');
            $table->date('tgl_pengantaran');
            $table->string('nama_kurir');
            $table->string('no_kurir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antar_jemputs');
    }
};
