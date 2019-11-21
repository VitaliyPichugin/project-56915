import './bootstrap';
import Vue from 'vue';

Vue.component('auth', require('./components/guest/Auth.vue').default);

const app = new Vue({
    el: '#app',
});

export default app;
