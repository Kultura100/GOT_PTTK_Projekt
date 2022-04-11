<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodpunktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podpunkt', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->unsignedBigInteger('id_punkt');
            $table->foreign('id_punkt')
            ->references('id')
            ->on('punkt');
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
        Schema::dropIfExists('podpunkt');
    }
}
