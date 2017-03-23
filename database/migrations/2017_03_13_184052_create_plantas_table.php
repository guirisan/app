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
        Schema::create('plantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom');
            $table->string('nom_cientific')->nullable();
            $table->text('descripcio')->nullable();
            $table->date('sembra_ini')->nullable();         // només interesa DD/MM
            $table->date('sembra_fi')->nullable();          // només interesa DD/MM
            $table->integer('dies')->nullable();            //duracio del cultiu en dies
            $table->text('sembra')->nullable();
            $table->text('cultiu')->nullable();
            $table->text('collita')->nullable();
            $table->integer('user_id')->default(1);
            $table->integer('grup_id')->nullable();
            $table->integer('familia_id')->nullable();
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
