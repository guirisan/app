<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->string('nom');
            $table->string('path');
            $table->string('thumbnail_path');

            $table->text('descripcio')->nullable();
            $table->string('imageable_type');
            $table->integer('imageable_id');
            //$table->unique(['user_id', 'imageable_id', 'imageable_type']); //esta restricció només permet una imatge per a cada model (una per a cada planta, per a cada plaga, etc.)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
