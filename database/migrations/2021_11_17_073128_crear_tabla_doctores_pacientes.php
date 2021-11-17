<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDoctoresPacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctores', function (Blueprint $tabla) {
            $tabla->integer('id');
            $tabla->string('nombre');
            $tabla->string('apellidos');
            $tabla->integer('num_pacientes');
            $tabla->timestamps();
        });

        Schema::create('pacientes', function (Blueprint $tabla) {
            $tabla->integer('id');
            $tabla->string('nombre');
            $tabla->string('apellidos');
            $tabla->string('dni');
            $tabla->date('fecha_nacimiento');
            $tabla->boolean('vacunado');
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
        //
    }
}
