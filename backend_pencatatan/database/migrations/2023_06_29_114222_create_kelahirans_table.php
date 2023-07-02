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
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->string('no_hp');
            $table->date('tanggal_lahir');
            $table->string('jam_lahir');
            $table->integer('tinggi_badan');
            $table->float('berat_badan');
            $table->integer('lingkar_kepala');
            $table->integer('lingkar_dada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelahiran');
    }
};
