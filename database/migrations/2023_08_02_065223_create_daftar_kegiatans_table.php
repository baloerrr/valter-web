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
        Schema::create('daftar_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('kegiatan_id')->constrained();
            $table->string('no_whatsapp');
            $table->string('asal_instansi');
            $table->string('bukti_pembayaran');
            $table->enum('status', ['belum divalidasi', 'sudah divalidasi'])->default('belum divalidasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_kegiatans');
    }
};
