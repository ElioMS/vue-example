<template>
	<div class="row">
		<div class="col-md-12" v-for="announcement in announcements">
			<div class="card">
				<div class="card-header">
					<a href="http://localhost:8000/anuncio/1"> {{ announcement.title }} </a>
				</div>

				<div class="card-body">
					{{ announcement.description }}
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        data () {
            return {
                announcements : [],
            }
        },
        methods : {
            getCategories () {
                var self = this;
                axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/announcements')
                    .then( function (response) {
                        // console.log(response.data.data)
                        self.announcements = response.data.data;
                    });
            }
        },
        mounted () {
            this.getCategories();
        }
    }
</script>