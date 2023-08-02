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
        Schema::table('users', function (Blueprint $table) {
            $table->string('jenis_kegiatan')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('asal_instansi')->nullable();
            $table->string('validasi')->default('Belum divalidasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['jenis_kegiatan', 'nama_lengkap', 'asal_instansi']);
        });
    }
};
