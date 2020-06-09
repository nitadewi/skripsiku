<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->increments('id_wisatas');
            $table->string('nama');
            $table->string('foto');
            $table->string('alamat');
            $table->text('keterangan');
            $table->string('ltd');
            $table->string('lngtd');
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
        Schema::drop('wisatas');
    }
}
