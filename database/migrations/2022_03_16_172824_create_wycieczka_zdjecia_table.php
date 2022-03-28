<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWycieczkaZdjeciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wycieczka_zdjecia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_wycieczka');
            $table->foreign('id_wycieczka')
            ->references('id')
            ->on('wycieczka');
            $table->string('zrodlo_zdjecia');
            $table->string('opis');
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
        Schema::dropIfExists('wycieczka_zdjecia');
    }
}
