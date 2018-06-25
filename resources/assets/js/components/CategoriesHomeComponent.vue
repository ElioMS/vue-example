<template>
	<div class="row">
		<div class="col-md-4" style="display: inline;" v-for="category in categories">
			<div class="card">
				<div class="card-header">
					{{ category.name }}
				</div>

				<div class="card-body">
					{{ category.description }}
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
		data () {
			return {
				categories : [
					{
                        name : 'Category 1',
                        description : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad ' +
                        'minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '
					},
                    {
                        name : 'Category 2',
                        description : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad ' +
                        'minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '
                    }
				],
			}
		},
		methods : {
			getCategories () {
				axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/announcements/filters?filter_id=category')
					.then( function (response) {
						// console.log(response.data);
					});
			}
		},
	    mounted () {
	        this.getCategories();
	    }
    }
</script>