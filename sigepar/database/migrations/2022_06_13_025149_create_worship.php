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
        Schema::create('worship', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255, null);
            $table->string('hari', 255, null);
            $table->date('tanggal',  null);
            $table->string('tema', 255, null);
            $table->integer('id_produre');
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
        Schema::dropIfExists('worship');
    }
};
