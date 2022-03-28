<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupaPrzodownikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupa_przodownik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_przodownik');
            $table->foreign('id_przodownik')
            ->references('id')
            ->on('users');
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
        Schema::dropIfExists('grupa_przodownik');
    }
}
