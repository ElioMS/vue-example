<template>
<div class="row">
	<div class="col-md-4" style="display: inline-block;" v-for="partner in partners">
		<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="http://www.augment.com/help/wp-content/plugins/ajax-search-lite/img/default.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">{{ partner.content }}</h5>
				<p class="card-text"> {{ partner.description }} </p>
				<a href="#" class="btn btn-primary btn-block"> Quiero saber mas </a>
			</div>
		</div>
	</div>
</div>
</template>

<script>
    export default {
        name: "PartnerComponent",
        data () {
            return {
                partners : []
            }
        },
        methods : {
            getPartners () {
                var self = this;
				axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/filters/companies')
				.then( function(response) {
					self.partners = response.data;
				});
            }
        },
        created () {
            this.getPartners();
        }
    }
</script>

<style scoped>

</style>