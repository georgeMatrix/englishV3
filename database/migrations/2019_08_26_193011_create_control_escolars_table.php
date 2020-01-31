<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlEscolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_escolars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('niveles');
            $table->string('grupo');
            $table->string('escolaridad');
            $table->string('noControl');
            $table->string('cicloEscolar');
            $table->string('edad');
            $table->string('incorporados');
            $table->string('sexo');
            $table->string('maestro');
            $table->string('horarioSep');
            $table->string('curp');
            $table->string('horario');
            $table->string('modulosAcreditados');
            $table->string('nombreCompleto');
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('control_escolars');
    }
}
