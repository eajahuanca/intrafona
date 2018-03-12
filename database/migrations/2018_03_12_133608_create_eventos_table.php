<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eve_logo');
            $table->string('eve_logonombre');
            $table->string('eve_nombre')->unique();
            $table->text('eve_descripcion');
            $table->string('eve_lugar');
            $table->date('eve_fechaini');
            $table->date('eve_fechafin')->nullable();
            $table->string('eve_horaini')->nullable();
            $table->string('eve_horafin')->nullable();
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
        Schema::dropIfExists('eventos');
    }
}
