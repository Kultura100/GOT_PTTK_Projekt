<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowiadomieniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powiadomienie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turysta');
            $table->foreign('id_turysta')
            ->references('id')
            ->on('users');
            $table->unsignedBigInteger('id_przodownik');
            $table->foreign('id_przodownik')
            ->references('id')
            ->on('users');
            $table->string('tekst');            
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
        Schema::dropIfExists('powiadomienie');
    }
}
