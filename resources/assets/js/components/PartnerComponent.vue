<template>
<div class="row">
	<div class="col-md-4" style="display: inline-block;" v-for="partner in partners">
		<div class="card" style="width: 18rem;">
			<img class="card-img-top" :src="partner.image" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">{{ partner.name }}</h5>
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
                partners : [
	                {
	                    name: 'Chinawok',
	                    description : 'LOREM ipsum dolor sit amet, consectetur\n' +
                        'adipisicing elit, sed do eiusmod tempor\n' +
                        'incididunt ut labore et dolore magna aliqua.\n' +
                        'Ut enim ad minim veniam, quis nostrud\n' +
                        'exercitation ullamco laboris nisi ut aliquip ',
                        vacancies : 23,
                        image : 'http://www.augment.com/help/wp-content/plugins/ajax-search-lite/img/default.jpg'
	                },
                    {
                        name: 'Bembos',
                        description : 'LOREM ipsum dolor sit amet, consectetur\n' +
                        'adipisicing elit, sed do eiusmod tempor\n' +
                        'incididunt ut labore et dolore magna aliqua.\n' +
                        'Ut enim ad minim veniam, quis nostrud\n' +
                        'exercitation ullamco laboris nisi ut aliquip ',
                        vacancies : 23,
                        image : 'http://www.augment.com/help/wp-content/plugins/ajax-search-lite/img/default.jpg'
                    },
                    {
                        name: 'Don Belisario',
                        description : 'LOREM ipsum dolor sit amet, consectetur\n' +
                        'adipisicing elit, sed do eiusmod tempor\n' +
                        'incididunt ut labore et dolore magna aliqua.\n' +
                        'Ut enim ad minim veniam, quis nostrud\n' +
                        'exercitation ullamco laboris nisi ut aliquip ',
                        vacancies : 23,
                        image : 'http://www.augment.com/help/wp-content/plugins/ajax-search-lite/img/default.jpg'
                    }
                ]
            }
        },
        methods : {
            getPartners () {

            }
        }
    }
</script>

<style scoped>

</style>