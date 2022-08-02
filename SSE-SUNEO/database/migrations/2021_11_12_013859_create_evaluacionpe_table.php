<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionpeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacionpe', function (Blueprint $table) {
            $table->id();
            $table->enum('evaluacion',['Excelente','Muy buena','Buena','Regular','Mala']);
            $table->unsignedBigInteger('primerEmpleo_id');
            $table->foreign('primerEmpleo_id')->references('id')->on('primerempleo');
            $table->unsignedBigInteger('catalogoPregunta_id');
            $table->foreign('catalogoPregunta_id')->references('id')->on('catalogopregunta');
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
        Schema::dropIfExists('evaluacionpe');
    }
}
