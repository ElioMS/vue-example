<template>
	<div class="row ">
		<div class="col-md-4 category-card" style="display: inline;" v-for="category in categories">
			<div class="card">
				<div class="card-header">
					{{ category.content }}
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
				categories : [],
			}
		},
		methods : {
			getCategories () {
                var self = this;

				axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/filters/categories')
				.then( function (response) {
						self.categories = response.data
				});
			}
		},
	    created () {
	        this.getCategories();
	    }
    }
</script>