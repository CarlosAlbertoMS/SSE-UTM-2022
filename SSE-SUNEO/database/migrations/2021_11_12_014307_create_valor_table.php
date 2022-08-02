<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valor', function (Blueprint $table) {
            $table->id();
            $table->string('valor',45);
            $table->tinyInteger('demostrado');
            $table->unsignedBigInteger('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleado');
            $table->unsignedBigInteger('catalogoValor_id');
            $table->foreign('catalogoValor_id')->references('id')->on('catalogovalor');
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
        Schema::dropIfExists('valor');
    }
}
