<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWycieczkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wycieczka', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turysty');
            $table->foreign('id_turysty')
            ->references('id')
            ->on('users');
            $table->unsignedBigInteger('id_tworcy');
            $table->foreign('id_tworcy')
            ->references('id')
            ->on('users');
            $table->date('dataod');
            $table->date('datado');
            $table->integer('punkty');
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
        Schema::dropIfExists('wycieczka');
    }
}
