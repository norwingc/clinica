<template>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Pacientes
        </div>
        <div class="card-body">
			<div class="table-responsive">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Cedula</th>
                            <th>Telefono convencional</th>
                            <th>Telefono movistar</th>
                            <th>Telefono claro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted(){
        this.fetch()
    },
    methods:{
        async fetch(){
            $('#table').DataTable({
    	        processing: true,
    	        serverSide: true,
                ajax: '/Paciente/api',
            });
        }
    }
}
</script>
