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
        Schema::create('data_jemaat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('keluarga');
            $table->text('alamat');
            $table->integer('no_hp');
            $table->date('tanggal_lahir');
            $table->date('tanggal_bergabung');
            $table->string('status');
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
        Schema::dropIfExists('data_jemaat');
    }
};
