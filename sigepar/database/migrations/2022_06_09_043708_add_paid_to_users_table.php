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
        Schema::table('users', function (Blueprint $table) {
            $table->string('jenis_kelamin', 25);
            $table->string('keluarga', 255);
            $table->string('alamat', 255);
            $table->string('no_hp', 15);
            $table->timestamp('tgl_lahir');
            $table->timestamp('tgl_bergabung');
            $table->string('status',255);
            $table->string('avatar',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
