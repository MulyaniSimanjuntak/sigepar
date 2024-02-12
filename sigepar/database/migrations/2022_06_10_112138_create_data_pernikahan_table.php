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
        Schema::create('data_pernikahan', function (Blueprint $table) {
            $table->id();
            $table->string('id_user', 255, null);
            $table->string('nama_pria', 255, null);
            $table->date('tgl_lahir_pria');
            $table->date('tgl_babtis_pria');
            $table->date('tgl_sidi_pria');
            $table->string('lampiran_pria', 255, null);
            $table->string('sidi_pria', 255, null);
            $table->string('izin_ortu_pria', 255, null);
            $table->string('surat_jemaat_pria', 255, null);
            $table->string('ijazah_pria', 255, null);
            $table->string('nama_wanita', 255, null);
            $table->date('tgl_lahir_wanita');
            $table->date('tgl_babtis_wanita');
            $table->date('tgl_sidi_wanita');
            $table->string('lampiran_wanita', 255, null);
            $table->string('sidi_wanita', 255, null);
            $table->string('izin_ortu_wanita', 255, null);
            $table->string('surat_jemaat_wanita', 255, null);
            $table->string('ijazah_wanita', 255, null);
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
        Schema::dropIfExists('data_pernikahan');
    }
};
