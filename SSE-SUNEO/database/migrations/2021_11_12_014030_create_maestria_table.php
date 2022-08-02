<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestria', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',100);
            $table->tinyInteger('titulado');
            $table->unsignedBigInteger('preparacion_id');
            $table->foreign('preparacion_id')->references('id')->on('preparacion');
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
        Schema::dropIfExists('maestria');
    }
}
