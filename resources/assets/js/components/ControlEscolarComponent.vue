<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="text-right card-header"><a :href="'controlEscolar/create'" class="btn btn-primary">Nuevo</a></div>

                    <div class="card-body table-responsive">
                        <table class="table table-striped table-bordered table-responsive-md table-responsive-lg table-responsive-sm" id="controlEscolar">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.tableControlEscolar();
        },
        data(){
            return{
                controlEscolar:[],
                //routeCreate: "{{url('controlEscolar.create')}}"
            }
        },
        methods:{
            tableControlEscolar(){
              $(function(){
                  $('#controlEscolar').DataTable({
                      ajax: {
                          url: 'api/getControlEscolar'
                      },
                      "columns": [
                          {title:'No', data:'id', name: 'id'},
                          {title:'Niveles', data:'niveles', name: 'niveles'},
                          {title:'Grupo', data:'grupo', name: 'grupo'},
                          {title:'escolaridad', data:'escolaridad', name: 'escolaridad'},
                          {title:'noControl', data:'noControl', name: 'noControl'},
                          {title:'cicloEscolar', data:'cicloEscolar', name: 'cicloEscolar'},
                          {title:'edad', data:'edad', name: 'edad'},
                          {title:'incorporados', data:'incorporados', name: 'incorporados'},
                          {title:'sexo', data:'sexo', name: 'sexo'},
                          {title:'maestro', data:'maestro', name: 'maestro'},
                          {title:'horarioSep', data:'horarioSep', name: 'horarioSep'},
                          {title:'curp', data:'curp', name: 'curp'},
                          {title:'horario', data:'horario', name: 'horario'},
                          {title:'modulosAcreditados', data:'modulosAcreditados', name: 'modulosAcreditados'},
                          {title:'nombreCompleto', data:'nombreCompleto', name: 'nombreCompleto'},
                          {title:'status', data:'status', name: 'status'},
                          {title:'status', data:'status', name: 'status'},
                          {title: 'Opciones', data: 'actions'}
                      ],
                      processing: true
                  });
              })
            }
        }
    }
</script>
