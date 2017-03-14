<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('nom_cientific')->nullable();
            $table->text('descripcio')->nullable();
            $table->date('sembra_ini')->nullable();
            $table->date('sembra_fi')->nullable();
            $table->text('sembra')->nullable();
            $table->text('cultiu')->nullable();
            $table->text('collita')->nullable();
            $table->integer('user_id');
            $table->integer('grup_id')->nullable();
            $table->integer('familia_id')->nullable();
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
        Schema::dropIfExists('plantas');
    }
}
