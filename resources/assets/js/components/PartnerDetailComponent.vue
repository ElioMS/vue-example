<template>
    <div>
        <h2 class="title"> {{ company.title }} </h2>

        <div class="row">

            <div class="col-md-7">
                <h3> {{ company.subtitle }}</h3>
                <p> {{ company.description }}</p>
                <ul>
                    <li> Lorem </li>
                    <li> Lorem </li>
                    <li> Lorem </li>
                </ul>
            </div>

            <div class="col-md-5">
                <h3> {{ company.subtitle }}</h3>
            </div>

        </div>

        <h2 class="title"> Que piensan de nosotros </h2>

        <div class="row">
            <div class="col-md-4" v-for="testimony in testimonies">
                <div class="card" >
                    <div class="card-body">
                        <img class="user-icon" :src="testimony.image" width="50px" height="50px" alt="">
                        <span class="author"> {{ testimony.name }} </span>
                        <p> {{ testimony.content }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="title"> Vacantes disponibles </h2>

        <div class="row">
            <div class="col-md-4" v-for="announcement in announcements">
                <div class="card" >
                    <div class="card-body">
                        <span class="author"> {{ announcement.title }} </span>
                        <p> {{ announcement.location_content }} </p>
                        <p> {{ announcement.description }}</p>
                        <a class="btn btn-info btn-block" :href="'/anuncio/' + announcement.id "> Ver vacante </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "partner-detail-component",
        data () {
            return {
                company : [],
                testimonies : [],
                announcements : []
            }
        },
        methods : {
            getCompany () {
                let company = {
                    title : 'BEMBOS',
                    subtitle : 'como bembos no hay otra',
                    description : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
                }

                this.company = company
            },
            getTestimonies () {
                    let testimonies = [
                        {
                            content : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                            name : 'Juan Perez',
                            image : 'https://marketplace.canva.com/MAB2sqFKHu0/1/thumbnail_large/canva-business-people-design-person-icon--MAB2sqFKHu0.png'
                        },
                        {
                            content : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                            name : 'Marco Polo',
                            image : 'https://marketplace.canva.com/MAB2sqFKHu0/1/thumbnail_large/canva-business-people-design-person-icon--MAB2sqFKHu0.png'
                        }
                    ];

                    this.testimonies = testimonies;
            },
            getHighlightAnnouncements () {
                self = this;
                axios.get('https://private-ecff9-o7jobs1.apiary-mock.com/announcements?company_id=001&only_highlighted=true')
                .then(function (response) {
                    $.each(response.data.data, function (index, value) {
                        self.announcements.push(value);
                    });
                });
            }
        },
        created () {
            this.getCompany();
            this.getTestimonies();
            this.getHighlightAnnouncements();
        }
    }
</script>

<style scoped>

</style>