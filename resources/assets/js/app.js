require('./bootstrap');

window.Vue = require('vue');
/*
 * Components
 */
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('categories-home', require('./components/CategoriesHomeComponent.vue'));
Vue.component('announcement-list', require('./components/AnnouncementsComponent.vue'));
Vue.component('partners-list', require('./components/PartnerComponent.vue'));
Vue.component('filters', require('./components/FiltersComponent.vue'));
Vue.component('announcement', require('./components/AnnouncementComponent.vue'));
Vue.component('registro', require('./components/RegistroComponent.vue'));

const app = new Vue({
    el: '#app',
    data : {

    }
});
