<template>
	<div>
		<h4> Puestos </h4>
		<ul>
			<li v-for="position in positions">{{ position.content }}</li>
		</ul>
		<h4> Provincias </h4>
		<ul>
			<li v-for="location in locations">{{ location.content }}</li>
		</ul>
	</div>
</template>

<script>
    export default {
        name: "FiltersComponent",
        data () {
            return {
				positions : [],
				locations : []
            }
        },
        created () {
            this.getPositions();
            this.getLocations();
            this.getSchedules();
        },
        methods : {
            getPositions () {
                var self = this;
                axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/filters/categories')
                .then( function(response) {
					self.positions = response.data;
                });
            },
            getLocations () {
                var self = this;
                axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/filters/locations')
                .then( function(response) {
					self.locations = response.data;
                });
            },
            getSchedules () {
                var self = this;
                axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/filters/schedule_types')
                .then( function(response) {
                    console.log(response.data)
                });
            }
        }
    }
</script>

<style scoped>

</style>