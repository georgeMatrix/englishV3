<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noControl');
            $table->string('maestro');

            $table->string('alumno');
            $table->string('icInicial1stTest')->nullable();
            $table->string('icInicial2stTest')->nullable();
            $table->string('icInicial3stTest')->nullable();
            $table->string('workbook')->nullable();
            $table->string('icInicialPlataformaYtareas')->nullable();
            $table->string('icInicialFinalScore')->nullable();

            $table->string('icInicialParticipation')->nullable();
            $table->string('icInicialUnderstanding')->nullable();
            $table->string('icInicialApplication')->nullable();
            $table->string('icInicialPresentation')->nullable();
            $table->string('icInicialTestScore')->nullable();

            $table->string('icbSuperior1stTest')->nullable();
            $table->string('icbSuperior2stTest')->nullable();
            $table->string('icbSuperior3stTest')->nullable();
            $table->string('icbSuperiorPlataformaYtareas')->nullable();
            $table->string('icbSuperiorFinalScore')->nullable();

            $table->string('icbSuperiorParticipation')->nullable();
            $table->string('icbSuperiorUnderstanding')->nullable();
            $table->string('icbSuperiorApplication')->nullable();
            $table->string('icbSuperiorPresentation')->nullable();
            $table->string('icbSuperiorTestScore')->nullable();

            $table->string('icpIntermedio1stTest')->nullable();
            $table->string('icpIntermedio2stTest')->nullable();
            $table->string('icpIntermedio3stTest')->nullable();
            $table->string('icpIntermedioPlataformaYtareas')->nullable();
            $table->string('icpIntermedioFinalScore')->nullable();

            $table->string('icpIntermedioParticipation')->nullable();
            $table->string('icpIntermedioUnderstanding')->nullable();
            $table->string('icpIntermedioApplication')->nullable();
            $table->string('icpIntermedioPresentation')->nullable();
            $table->string('icpIntermedioTestScore')->nullable();

            $table->string('icIntermedio1stTest')->nullable();
            $table->string('icIntermedio2stTest')->nullable();
            $table->string('icIntermedio3stTest')->nullable();
            $table->string('icIntermedioPlataformaYtareas')->nullable();
            $table->string('icIntermedioFinalScore')->nullable();

            $table->string('icIntermedioParticipation')->nullable();
            $table->string('icIntermedioUnderstanding')->nullable();
            $table->string('icIntermedioApplication')->nullable();
            $table->string('icIntermedioPresentation')->nullable();
            $table->string('icIntermedioTestScore')->nullable();

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
        Schema::dropIfExists('calificaciones');
    }
}
