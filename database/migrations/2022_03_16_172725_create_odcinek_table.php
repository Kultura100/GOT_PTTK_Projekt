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
            $table->unsignedBigInteger('id_punkt_poczatek');
            $table->foreign('id_punkt_poczatek')
            ->references('id')
            ->on('podpunkt');
            $table->unsignedBigInteger('id_punkt_koniec');
            $table->foreign('id_punkt_koniec')
            ->references('id')
            ->on('punkt');
            $table->integer('punkty_od');
            $table->integer('punkty_do');
            $table->boolean('otwarty')->default(true);
            $table->unsignedBigInteger('id_pasma');
            $table->foreign('id_pasma')
            ->references('id')
            ->on('pasmo');
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
