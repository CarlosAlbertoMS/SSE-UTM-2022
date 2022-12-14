<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabuladorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabulador', function (Blueprint $table) {
            $table->id();
            $table->string('empleo',200);
            $table->integer('carrera');
            $table->integer('experiencia');
            $table->enum('unidad_tiempo',['meses','años']);
            $table->integer('monto_minimo');
            $table->integer('monto_maximo');
            $table->enum('unidad_monto',['mensuales','anuales']);
            $table->tinyInteger('activo');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tabulador');
        Schema::enableForeignKeyConstraints();
    }
}
