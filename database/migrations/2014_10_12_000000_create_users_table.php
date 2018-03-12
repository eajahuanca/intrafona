<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('us_nombre');
            $table->string('us_paterno');
            $table->string('us_materno');
            $table->string('us_nombrecompleto');
            $table->string('us_carnet');
            $table->string('us_expedido');
            $table->string('us_genero');
            $table->string('us_foto');
            $table->date('us_fechanacimiento');
            $table->text('us_direccion');
            $table->string('us_cargo');
            $table->enum('us_jefes',['DIRECCION','COORDINADOR','AUDITOR','NORMAL']);
            $table->enum('us_tipo',['ADMINISTRADOR','USUARIO','FORMULARIO','DOCUMENTO','BANNER','SISTEMAS']);
            $table->string('email')->unique();
            $table->string('us_cuenta')->unique();
            $table->string('password');
            $table->boolean('us_estado')->default(true);
            $table->text('us_obs');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
