<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdcinekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odcinek', function (Blueprint $table) {
            $table->id();
            $table->integer('id_punkt_poczatek');
            $table->integer('id_punkt_koniec');
            $table->integer('punkty_od');
            $table->integer('punkty_do');
            $table->boolean('otwarty');
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
        Schema::dropIfExists('odcinek');
    }
}
