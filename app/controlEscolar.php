<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class controlEscolar extends Model
{
    protected $fillable = [
        'grupo',
        'escolaridad',
        'noControl',
        'cicloEscolar',
        'edad',
        'incorporados',
        'sexo',
        'niveles',
        'maestro',
        'horarioSep',
        'curp',
        'horario',
        'modulosAcreditados',
        'nombreCompleto'
    ];

    public static function activos(){
        return ControlEscolar::where('status', '=', 'active');
    }
}
