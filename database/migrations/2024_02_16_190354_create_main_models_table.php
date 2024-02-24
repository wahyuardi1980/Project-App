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
        Schema::create('main_model', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang')->nullable();
            $table->enum('kategori', ['CCTV', 'ALARM', 'ACCESS_CONTROL', 'FINGER_PRINT', 'PABX', 'VIDEO_WALL']);
            $table->integer('harga');
            $table->text('description')->nullable();
            $table->string('foto_barang');
            $table->timestamps();          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_model');
    }
};
