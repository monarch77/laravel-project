<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_k_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('status_lulus');
            $table->string('nama_perusahaan');
            $table->string('rincian_progress')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->string('status_konfirmasi');
            $table->string('file_pkl');
            $table->string('nilai')->nullable();
            $table->string('progress_ke')->nullable();
            $table->foreignId('mahasiswa_nim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_k_l_s');
    }
};
