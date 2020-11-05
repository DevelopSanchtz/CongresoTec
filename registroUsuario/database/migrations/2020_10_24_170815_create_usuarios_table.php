<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCompleto');
            $table->string('fechaNacimiento')->nullable();
            $table->string('sexo');
            $table->string('paisProcedencia');
            $table->string('estadoProcedencia');
            $table->string('correo', 200)->unique();
            $table->string('carrera')->nullable();
            $table->string('semestre')->nullable();
            $table->string('institutoProcedencia')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}