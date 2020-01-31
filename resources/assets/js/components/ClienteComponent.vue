<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <table class="table" id="clienteTable">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for='cliente of clientes'>
                                <td>{{cliente.nombre}}</td>
                                <td>{{cliente.nombre}}</td>
                                <td>{{cliente.nombre}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import datatables from 'datatables'
    export default {
        mounted() {
            this.getClientes();
        },
        data(){
            return{
                clientes:[]
            }
        },
        methods:{
            mytable(){
              $(function(){
                  $('#clienteTable').DataTable();
              })
            },
            getClientes(){
                axios.get('api/getCliente')
                .then(response=>{
                    this.clientes = response.data;
                    this.mytable();
                })
            }
        }
    }
</script>
