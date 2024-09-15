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
        Schema::create('syarats', function (Blueprint $table) {
            $table->id('id_komponen');
            $table->string('komponen', 255);
            $table->text('uraian');
            $table->unsignedBigInteger('id_sub');
            $table->timestamps();

            $table->foreign('id_sub')->references('id_sub')->on('sub_pelayanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syarats');
    }
};
