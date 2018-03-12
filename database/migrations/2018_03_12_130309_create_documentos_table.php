<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doc_nombre');
            $table->string('doc_nombreoriginal');
            $table->string('doc_tamanio');
            $table->string('doc_tipo'); //xls,pdf,docx
            $table->text('doc_descripcion');
            $table->boolean('doc_estado')->default(true);
            $table->integer('idtipodocumento')->unsigned();
            $table->integer('idusuarioregistra')->unsigned();
            $table->integer('idusuariomodifica')->unsigned();
            $table->timestamps();

            $table->foreign('idtipodocumento')->references('id')->on('tipodocumentos');
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
        Schema::dropIfExists('documentos');
    }
}
