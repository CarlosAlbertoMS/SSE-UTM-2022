<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadpeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidadpe', function (Blueprint $table) {
            $table->id();
            $table->string('habilidad',100);
            $table->unsignedBigInteger('primerEmpleo_id');
            $table->foreign('primerEmpleo_id')->references('id')->on('primerempleo');
            $table->unsignedBigInteger('catalogoHabilidad_id');
            $table->foreign('catalogoHabilidad_id')->references('id')->on('catalogohabilidad');
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
        Schema::dropIfExists('habilidadpe');
    }
}
