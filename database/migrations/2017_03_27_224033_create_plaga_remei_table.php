<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlagaRemeiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaga_remei', function (Blueprint $table) {
            $table->integer('plaga_id');
            $table->integer('remei_id');
            $table->text('descripcio')->nullable();
            $table->primary(['plaga_id', 'remei_id']);
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
        Schema::dropIfExists('plaga_remei');
    }
}
