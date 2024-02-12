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
        Schema::create('data_peneguhan_sidi', function (Blueprint $table) {
            $table->id();
            $table->string('id_user', 255, null);
            $table->string('nama_ayah', 255, null);
            $table->string('nama_ibu', 255, null);
            $table->string('kk', 255, null);
            $table->date('tgl_resmi_jemaat');
            $table->string('nama_sidi', 255, null);
            $table->string('jk_sidi', 255, null);
            $table->date('tgl_sidi');
            $table->date('tgl_babtis_sidi');
            $table->string('lampiran', 255, null);
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
        Schema::dropIfExists('data_peneguhan_sidi');
    }
};
