<template>
	<div>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h3>Fluid jumbotron</h3>
				<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        name: "AnnouncementComponent",
        data () {
            return {
				announcement : null
            }
        },
        methods : {
            getAnnouncement () {
				axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/announcement/1')
				.then( function (response) {

				});
            }
        },
        created () {
            this.$route
        }
    }
</script>

<style scoped>

</style>