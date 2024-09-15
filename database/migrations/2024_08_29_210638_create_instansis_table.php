<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansisTable extends Migration
{
    public function up()
    {
        Schema::create('instansi', function (Blueprint $table) {
            $table->id('id_instansi');
            $table->string('nama_instansi', 255);
            $table->binary('gambar_instansi');
            $table->text('url');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('instansi');
    }
}
