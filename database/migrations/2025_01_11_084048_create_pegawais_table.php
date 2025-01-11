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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('antarjemput_id')->constrained('antar_jemputs')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_pegawai')->unique();
            $table->string('nama_pegawai');
            $table->string('jenis_kelamin');
            $table->string('no_telepon');
            $table->string('email')->unique();
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
