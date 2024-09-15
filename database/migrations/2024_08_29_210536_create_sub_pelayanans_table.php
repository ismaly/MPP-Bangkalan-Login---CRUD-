<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPelayanansTable extends Migration
{
    public function up()
    {
        Schema::create('sub_pelayanan', function (Blueprint $table) {
            $table->id('id_sub');
            $table->string('nama_sub', 255);
            $table->unsignedBigInteger('id_layanan');
            $table->timestamps();

            $table->foreign('id_layanan')->references('id_layanan')->on('pelayanan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_pelayanan');
    }
}

