<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_empresas', function (Blueprint $table) {
            $table->id();
            $table->enum('pregunta_1',['Excelente','Sobresaliente', 'Aceptable', 'Insuficiente', 'Deficiente']);
            $table->string('pregunta_2',200);
            $table->string('pregunta_3',200);
            $table->string('pregunta_4',150);
            $table->string('pregunta_5',250);
            $table->string('pregunta_6',200);
            $table->string('pregunta_7',200);
            $table->string('pregunta_8',250);
            $table->string('pregunta_9',250);
            $table->enum('pregunta_10a',['0','3','4','5']);
            $table->enum('pregunta_10b',['0','3','4','5']);
            $table->enum('pregunta_10c',['0','3','4','5']);
            $table->enum('pregunta_10d',['0','3','4','5']);
            $table->enum('pregunta_10e',['0','3','4','5']);
            $table->enum('pregunta_10f',['0','3','4','5']);
            $table->string('pregunta_11',500);
            $table->string('pregunta_12',600);
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa');
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
        Schema::dropIfExists('encuesta_empresas');
    }
}
