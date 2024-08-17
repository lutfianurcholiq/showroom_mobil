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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mobil')->unique();
            $table->string('nama_mobil');
            $table->string('tahun_mobil');
            $table->integer('harga_mobil');
            $table->string('lokasi_mobil');
            $table->string('foto_mobil');
            $table->string('kondisi_mobil');
            $table->enum('status_mobil',['terjual','belum terjual']);
            $table->foreignId('jenis_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
