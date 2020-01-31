<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('entidad');
            $table->string('resultado');
            $table->string('resultadoGeneral');
            $table->string('cefrLevel');
            $table->string('fechaCertificacion');
            $table->string('readingScore');
            $table->string('writingScore');
            $table->string('listeningScore');
            $table->string('speakingScore');
            $table->string('cambridgeEnglishScale');
            $table->string('certificateResult');
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
        Schema::dropIfExists('certificaciones');
    }
}
