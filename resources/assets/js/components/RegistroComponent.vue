<template>
	<div>
		<h2 class="title"> Unete a NGR </h2>
		<div class="row">
			<div class="col form-group">
				<label>Nombres </label>
				<input type="text" class="form-control" v-model="data.names">
			</div>
			<div class="col">
				<label for=""> Apellido paterno </label>
				<input type="text" class="form-control" v-model="data.paternal_surname">
			</div>
		</div>

		<div class="row">
			<div class="col form-group">
				<label> Apellido materno </label>
				<input type="text" class="form-control" v-model="data.maternal_surname">
			</div>
			<div class="col">
				<label for=""> Número de documento </label>
				<input type="text" class="form-control" v-model="data.document_number">
			</div>
		</div>

		<div class="row">
			<div class="col">
				<label for=""> Teléfono </label>
				<input type="text" v-model="data.cellphone" class="form-control">
			</div>

			<div class="col form-group">
				<label>Correo electrónico </label>
				<input type="text" v-model="data.email" class="form-control">
			</div>
		</div>

		<div class="row">
			<div class="col form-group">
				<label> Contraseña </label>
				<input type="text" class="form-control" v-model="data.password">
			</div>
			<div class="col">
				<label for=""> Repita contraseña </label>
				<input type="text" class="form-control" v-model="data.retype_password">
			</div>
		</div>

		<center> <button class="btn btn-info" @click="register"> Estoy listo </button> </center>
	</div>
</template>

<script>
    export default {
        name: "RegistroComponent",
        data () {
            return {
                data: {
                    names: '',
                    paternal_surname: '',
                    maternal_surname: '',
                    document_type_id: '01' ,
                    document_number: '',
                    cellphone: '',
                    email: '',
                    password: '',
                    retype_password: ''
                }
            }
        },
        methods: {
            register() {

                $.ajax({
                    url : 'http://181.65.247.204:4500/account/register',
                    type: 'post',
                    dataType: 'json',
                    data: this.data,
                    success: function (response) {
                        console.log(response);
                    }
                });

                // axios({
                // 	method: 'post',
                // 	url : 'http://181.65.247.204:4500/account/register',
                // 	data : this.data
                // })
                // .then(function (response) {
                // 	console.log(response);
                // })
                // axios.post('http://181.65.247.204:4500/account/register', {
                // 		names: this.data.names,
                // 		paternal_surname: this.data.paternal_surname,
                // 		maternal_surname: this.data.maternal_surname,
                // 		document_type_id: this.data.document_type_id,
                // 		document_number: this.data.document_number,
                // 		cellphone: this.data.cellphone,
                // 		email: this.data.email,
                // 		password: this.data.password,
                // 		retype_password: this.data.retype_password
                // })
	               //  .then( response => {
                //     console.log(response);
                // })
                // .catch(function (error) {
                //     // handle error
                //     console.log(error);
                // });
            }
        }
    }
</script>

<style scoped>

</style>