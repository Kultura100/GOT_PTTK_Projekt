<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWycieczkaOdcinekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wycieczka_odcinek', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_wycieczka');
            $table->foreign('id_wycieczka')
            ->references('id')
            ->on('wycieczka');
            $table->unsignedBigInteger('id_odcinek');
            $table->foreign('id_odcinek')
            ->references('id')
            ->on('odcinek');
            $table->date('data');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')
            ->references('id')
            ->on('status');
            $table->integer('liczba_punktow');
            $table->boolean('odwrocony');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wycieczka_odcinek');
    }
}
