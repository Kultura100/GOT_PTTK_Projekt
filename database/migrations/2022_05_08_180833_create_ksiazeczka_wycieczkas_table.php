<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKsiazeczkaWycieczkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ksiazeczka_wycieczkas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ksiazeczki');
            $table->foreign('id_ksiazeczki')
            ->references('id')
            ->on('ksiazeczka');
            $table->unsignedBigInteger('id_wycieczki');
            $table->foreign('id_wycieczki')
            ->references('id')
            ->on('wycieczka');
            $table->boolean('zatwierdzona')->default(false);
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
        Schema::dropIfExists('ksiazeczka_wycieczkas');
    }
}
