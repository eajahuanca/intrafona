<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misiones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mis_descripcion');
            $table->boolean('mis_estado')->default(true);
            $table->integer('idusuarioregistra')->unsigned();
            $table->integer('idusuariomodifica')->unsigned();
            $table->timestamps();

            $table->foreign('idusuarioregistra')->references('id')->on('users');
            $table->foreign('idusuariomodifica')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('misiones');
    }
}
