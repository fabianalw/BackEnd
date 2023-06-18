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
        Schema::create('data_kelahiran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi');
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
            $table->string('spartus');
            $table->string('bidan');
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kelahiran');
    }
};
