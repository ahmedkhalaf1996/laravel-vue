
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');


import VueRouter from 'vue-router';
import App from './App.vue';
import Quotes from './components/quotes.vue';
import NewQuote from './components/new-quote.vue';

Vue.use(VueRouter);

const routes = [
   {path:'', component: Quotes},
   {path:'/new-quote', component: NewQuote}
];

const router = new VueRouter({
	mode: 'history',
	routes: routes
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app', require('./App.vue'));

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App)
});
