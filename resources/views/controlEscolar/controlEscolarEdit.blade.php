@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form class="user" action="{{url('controlEscolar/'.$controlEscolar->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->grupo}}" id="grupo" name="grupo" placeholder="Grupo">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->escolaridad}}" id="escolaridad" name="escolaridad" placeholder="Escolaridad">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->noControl}}" id="noControl" name="noControl" placeholder="No. de control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->cicloEscolar}}" id="cicloEscolar" name="cicloEscolar" placeholder="Ciclo escolar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->edad}}" id="edad" name="edad" placeholder="Edad">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->incorporados}}" id="incorporados" name="incorporados" placeholder="Incorporados">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->sexo}}" id="sexo" name="sexo" placeholder="Sexo">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select name="niveles" id="niveles" class="form-control form-control-user">
                                <option value="">Seleccione una opción</option>
                                <option value="1" {{$controlEscolar->niveles == 1 ? 'selected':''}}>Ingles Comunicativo</option>
                                <option value="2" {{$controlEscolar->niveles == 2 ? 'selected':''}}>Ingles Comunicativo Superior</option>
                                <option value="3" {{$controlEscolar->niveles == 3 ? 'selected':''}}>Ingles Preintermedio</option>
                                <option value="4" {{$controlEscolar->niveles == 4 ? 'selected':''}}>Ingles Intermedio</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->maestro}}" id="maestro" name="maestro" placeholder="Maestro">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->horarioSep}}" id="horarioSep" name="horarioSep" placeholder="Horario SEP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->curp}}" id="curp" name="curp" placeholder="CURP">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->horario}}" id="horario" name="horario" placeholder="Horario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->modulosAcreditados}}" id="modulosAcreditados" name="modulosAcreditados" placeholder="Modulos Acreditados">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" value="{{$controlEscolar->nombreCompleto}}" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre Completo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-danger" href="{{url('controlEscolar')}}"><i class="fas fa-times"></i> Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
