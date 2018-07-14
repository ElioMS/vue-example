<template>
	<div>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h3> {{ announcement.title }} </h3>
				<span><i class="fas fa-binoculars"></i> {{ announcement.location_content }} </span>
				<span><i class="far fa-calendar-alt"></i> {{ calculatePeriod(announcement.begin_date) }} </span>
				<span><i class="far fa-clock"></i> {{ announcement.schedule_type_content }} </span>
				<span><i class="fas fa-dollar-sign"></i> {{ announcement.salary }} </span>
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
				announcement :
					{
                        title : 'Analista Programador',
                        salary: '3500',
                        location_content : 'Santiago de Surco',
                        schedule_type_content : 'Part-Time',
                        begin_date : '25/06/2018'
					}

            }
        },
        methods : {
            getAnnouncement () {
				axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/announcement/1')
				.then( function (response) {
					console.log(response)
				});
            },
            calculatePeriod (date) {
				let actualDate = moment(),
                	announcementDate = moment(date , "DD-MM-YYYY").locale('es');

                let difference = actualDate.diff(announcementDate);

                var d = moment.duration(difference).locale('es'),
					totalInDays = parseInt(d.asDays());

                switch(true) {
                    case (totalInDays <= 7):
                        var message = 'Hace '+totalInDays+' dias';
                        break;
                    case (7 < totalInDays && totalInDays <= 30) :
                        var weeks = parseInt(totalInDays / 7 );
                        var message = 'Hace '+weeks+ ' semanas';
                        break;
					case (totalInDays > 30):
                        var message = 'Hace ' + parseInt(d.asMonths()) + ' meses';
                        break;
                }

				return message;
            },
            getCompany (id) {
            	axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/filters/companies?company_id='+id)
				.then( function (response) {

				});
            }
        },
        mounted () {
            // this.$route.params.id
        }
    }
</script>

<style scoped>

</style>