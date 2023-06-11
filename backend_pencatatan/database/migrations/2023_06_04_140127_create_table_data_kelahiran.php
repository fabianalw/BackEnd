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
        Schema::create('table_data_kelahiran', function (Blueprint $table) {
            $table->id('id_bayi');
            $table->foreignId('id_bidan')->references('id_bidan')->on('table_bidan');
            $table->string('nama_lengkap');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->integer('no_hp');
            $table->date('tanggal_lahir');
            $table->time('jam_lahir');
            $table->string('jenis_kelamin');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
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
        Schema::dropIfExists('table_data_kelahiran');
    }
};
