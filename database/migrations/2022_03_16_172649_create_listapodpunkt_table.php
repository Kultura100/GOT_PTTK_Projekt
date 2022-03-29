<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListapodpunktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listapodpunkt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_punkt');
            $table->foreign('id_punkt')
            ->references('id')
            ->on('punkt');
            $table->unsignedBigInteger('id_podpunkt');
            $table->foreign('id_podpunkt')
            ->references('id')
            ->on('podpunkt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listapodpunkt');
    }
}
