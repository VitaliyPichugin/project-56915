import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import 'material-design-icons-iconfont/dist/material-design-icons.css'

//routes
import Routes from '@/js/routes.js';

//views
import App from '@/js/views/App';

Vue.component('auth', require('./components/guest/Auth.vue').default);

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    vuetify : new Vuetify({
        icons: {iconfont: 'mdiSvg',},
        theme: { dark: true },
    }),
    router: Routes,
    render: h => h(App),
});

export default app;
