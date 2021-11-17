<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class TablaCrearPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $tabla) {
            $tabla->increments('id');
            $tabla->string('nombre');
            $tabla->string('apellidos');
            $tabla->string('dni');
            $tabla->string('fecha_nacimiento');
            $tabla->string('vacunado');
            $tabla->integer('doctor_id')->nullable();
            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
