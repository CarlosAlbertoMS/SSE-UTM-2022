<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValorpeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valorpe', function (Blueprint $table) {
            $table->id();
            $table->string('valor',100);
            $table->unsignedBigInteger('primerEmpleo_id');
            $table->foreign('primerEmpleo_id')->references('id')->on('primerempleo');
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
        Schema::dropIfExists('valorpe');
    }
}
