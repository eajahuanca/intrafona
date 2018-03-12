<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinisteriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministerios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('min_logo');
            $table->string('min_nombre');
            $table->string('min_enlace');
            $table->text('min_descripcion');
            $table->boolean('min_estado')->default(true);
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
        Schema::dropIfExists('ministerios');
    }
}
