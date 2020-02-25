import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import colors from 'vuetify/lib/util/colors';
import VueResource from 'vue-resource';
import BootstrapVue from 'bootstrap-vue'


//routes
import Routes from '@/js/routes.js';

//views
import App from '@/js/views/App';

Vue.component('auth', require('./components/guest/Auth.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.use(Vuetify);
Vue.use(VueResource);
Vue.use(BootstrapVue);
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr("content");

const app = new Vue({
    el: '#app',
    vuetify : new Vuetify({
        icons: {iconfont: 'mdiSvg',},
        theme: {
            dark: true,
            themes: {
                dark: {
                    primary: colors.red.darken1, // #E53935
                    secondary: colors.red.lighten4, // #FFCDD2
                    accent: colors.indigo.base, // #3F51B5
                },
            },
        },
    }),
    router: Routes,
    render: h => h(App),
});

export default app;
