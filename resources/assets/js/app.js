require('./bootstrap');

window.Vue = require('vue');
/*
 * Components
 */
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('categories-home', require('./components/CategoriesHomeComponent.vue'));
Vue.component('announcement-list', require('./components/AnnouncementsComponent.vue'));
Vue.component('partners-list', require('./components/PartnerComponent.vue'));

const app = new Vue({
    el: '#app',
    data : {

    }
});
