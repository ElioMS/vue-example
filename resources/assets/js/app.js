require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');
/*
 * Components
 */
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('categories-home', require('./components/CategoriesHomeComponent.vue'));
Vue.component('announcement-list', require('./components/AnnouncementsComponent.vue'));
Vue.component('partners-list', require('./components/PartnerComponent.vue'));
Vue.component('filters', require('./components/FiltersComponent.vue'));
Vue.component('announcement', require('./components/AnnouncementComponent.vue'));
Vue.component('register', require('./components/RegistroComponent.vue'));
Vue.component('company', require('./components/PartnerDetailComponent.vue'));


const app = new Vue({
    el: '#app',
    data : {

    }
});
