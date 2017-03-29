<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlagaPlantaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaga_planta', function (Blueprint $table) {
            $table->integer('plaga_id');
            $table->integer('planta_id');
            $table->text('descripcio')->nullable();
            $table->primary(['plaga_id', 'planta_id']);
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
        Schema::dropIfExists('plaga_planta');
    }
}
