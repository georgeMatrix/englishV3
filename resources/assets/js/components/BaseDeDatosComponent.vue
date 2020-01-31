<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="text-right card-header"><a :href="'baseDeDatos/create'" class="btn btn-primary">Nuevo</a></div>

                    <div class="card-body table-responsive">
                        <table class="table table-striped table-bordered table-responsive-md table-responsive-lg table-responsive-sm" id="baseDeDatos">
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
            this.tableBaseDatos();
        },
        data(){
            return{
            }
        },
        methods:{
            tableBaseDatos(){
              $(function(){
                  $('#baseDeDatos').DataTable({
                      ajax: {
                          url: 'api/getBaseDeDatos'
                      },
                      "columns": [
                          {title:'No', data:'id', name: 'id'},
                          {title:'Grupo', data:'grupo', name: 'grupo'},
                          {title:'Grado', data:'grado', name: 'grado'},
                          {title:'Escolaridad', data:'escolaridad', name: 'escolaridad'},
                          {title:'No. de control', data:'no_control', name: 'no_control'},
                          {title:'Matricula', data:'matricula', name: 'matricula'},
                          {title:'Edad', data:'edad', name: 'edad'},
                          {title:'Incorporados', data:'incorporados', name: 'incorporados'},
                          {title:'nivel', data:'nivel', name: 'nivel'},
                          {title:'Horario Sep', data:'horario_sep', name: 'horario_sep'},
                          {title:'horario', data:'horario', name: 'horario'},
                          {title:'Nombre completo', data:'nombre_completo', name: 'nombre_completo'},
                          {title:'Fecha de ingreso', data:'fecha_de_ingreso', name: 'fecha_de_ingreso'},
                          {title:'Telefono casa u oficina', data:'telefono_casa_oficina', name: 'telefono_casa_oficina'},
                          {title:'Celular', data:'celular', name: 'celular'},
                          {title:'Facebook', data:'facebook', name: 'facebook'},
                          {title:'Fecha de nacimiento', data:'fecha_de_nacimiento', name: 'fecha_de_nacimiento'},
                          {title:'Edad', data:'edad', name: 'edad'},
                          {title:'Direccion', data:'direccion', name: 'direccion'},
                          {title:'Municipio', data:'municipio', name: 'municipio'},
                          {title:'E-mail', data:'email', name: 'email'},
                          {title:'Grado estudios', data:'grado_estudios', name: 'grado_estudios'},
                          {title:'Como te enteraste', data:'como_te_enteraste', name: 'como_te_enteraste'},
                          {title: 'Opciones', data: 'actions'}
                      ],
                      processing: true
                  });
              })
            }
        }
    }
</script>
