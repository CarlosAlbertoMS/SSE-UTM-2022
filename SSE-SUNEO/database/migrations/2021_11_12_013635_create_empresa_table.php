<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',200);
            $table->string('departamento',60);
            $table->string('descripcion',500);
            $table->string('rfc',45)->nullable()->unique();
            $table->enum('sector',['Pública', 'Privada', 'Propia'])->nullable();
            $table->string('giro',200);
            $table->string('telefono',12);
            $table->string('correo',50);
            $table->string('calle',45);
            $table->integer('numero');
            $table->string('colonia',60);
            $table->string('ciudad',60);
            $table->string('estado',60);
            $table->string('codigo_postal',60);
            $table->string('pagina_web',200);
            $table->string('imagen_url',500);
            $table->tinyInteger('habilitada');
            $table->string('motivo_no_contratacion',200)->nullable();
            $table->string('recomendaciones',200);
            $table->unsignedBigInteger('contacto_id');
            $table->foreign('contacto_id')->references('id')->on('contacto');
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
        Schema::dropIfExists('empresa');
        Schema::enableForeignKeyConstraints();
    }
}
