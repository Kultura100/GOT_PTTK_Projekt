<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasmoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasmo', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->unsignedBigInteger('id_grupa');
            $table->foreign('id_grupa')
            ->references('id')
            ->on('grupa');
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
        Schema::dropIfExists('pasmo');
    }
}
