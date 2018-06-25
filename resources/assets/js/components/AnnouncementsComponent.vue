<template>
	<div class="row">
		<div class="col" style="display: inline;" v-for="announcement in announcements">
			<div class="card">
				<div class="card-header">
					{{ announcement.title }}
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
						self.announcements = response.data;
                    });
            }
        },
        mounted () {
            this.getCategories();
        }
    }
</script>