<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_empleo',200);
            $table->string('descripcion',500);
            $table->string('ubicacion',100);
            $table->integer('carrera');
            $table->integer('experiencia');
            $table->integer('salario');
            $table->enum('status',['Vacante','Ocupada','Cancelada']);
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
        Schema::dropIfExists('oferta');
    }
}
