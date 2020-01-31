<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseDeDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_de_datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grado');
            $table->string('grupo');
            $table->string('escolaridad');
            $table->string('no_control');
            $table->string('matricula');
            $table->string('edad');
            $table->string('incorporados');
            $table->string('nivel');
            $table->string('horario_sep');
            $table->string('horario');
            $table->string('nombre_completo');
            $table->string('fecha_de_ingreso');
            $table->string('telefono_casa_oficina');
            $table->string('celular');
            $table->string('facebook');
            $table->string('fecha_de_nacimiento');
            $table->string('direccion');
            $table->string('municipio');
            $table->string('email');
            $table->string('grado_estudios');
            $table->string('como_te_enteraste');
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
        Schema::dropIfExists('base_de_datos');
    }
}
