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
            ->on('punkt');
            $table->unsignedBigInteger('id_punkt_koniec');
            $table->foreign('id_punkt_koniec')
            ->references('id')
            ->on('punkt');
            $table->unsignedBigInteger('punkty_od');
            $table->foreign('punkty_od')
            ->references('id')
            ->on('punkt');
            $table->unsignedBigInteger('punkty_do');
            $table->foreign('punkty_do')
            ->references('id')
            ->on('punkt');
            $table->boolean('otwarty');
            $table->unsignedBigInteger('id_pasma');
            $table->foreign('id_pasma')
            ->references('id')
            ->on('pasmo');
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
