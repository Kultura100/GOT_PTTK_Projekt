<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdznakaTurystyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odznaka_turysty', function (Blueprint $table) {
            $table->id(); //Powiazania porobic
            $table->unsignedBigInteger('id_turysty');
            $table->foreign('id_turysty')
            ->references('id')
            ->on('users');
            $table->unsignedBigInteger('id_odznaki');
            $table->foreign('id_odznaki')
            ->references('id')
            ->on('odznaka');
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
        Schema::dropIfExists('odznaka_turysty');
    }
}
