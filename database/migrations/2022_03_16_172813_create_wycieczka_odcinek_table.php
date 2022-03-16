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
            $table->integer('id_wycieczka');
            $table->integer('id_odcinek');
            $table->date('data');
            $table->integer('id_status');
            $table->integer('liczba_punktow');
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
        Schema::dropIfExists('wycieczka_odcinek');
    }
}
