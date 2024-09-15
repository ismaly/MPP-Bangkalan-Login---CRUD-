<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id('id_profil'); // Kolom primary key di tabel profil
            $table->string('title', 255);
            $table->text('desc_profil');
            $table->unsignedBigInteger('id_user'); // Kolom foreign key
            $table->timestamps();

            // Definisikan foreign key constraint
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil');
    }
}
