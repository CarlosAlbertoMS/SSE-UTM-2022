<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->integer('carrera');
            $table->string('puesto',200);
            $table->integer('antiguedad');
            $table->enum('unidad_tiempo', ['meses','años']);
            $table->string('carencias_basicas',200);
            $table->string('conocimientos_actualizados',200);
            $table->string('carencias_areas',200);
            $table->string('factores_contratacion',200); 
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
        Schema::dropIfExists('empleado');
    }
}
