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
        Schema::create('formulir_pendaftarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap', 100);
            $table->string('alamat', 100);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('no_tlp_whatsapp', 100);
            $table->string('jenis_kelamin', 100);
            $table->string('agama', 100);
            $table->string('asal_sekolah', 100);
            $table->string('nama_orang_tua_wali', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulir_pendaftarans');
    }
};
