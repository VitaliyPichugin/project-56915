import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import About from '@/js/components/About';
import Setting from '@/js/components/Setting';
import Post from '@/js/components/Post';

Vue.use(VueRouter);

const router = new VueRouter({
   mode: 'history',
   routes: [
       {
           path: '/',
           name: 'home',
           component: Home
       },
       {
           path: '/about',
           name: 'about',
           component: About
       },
       {
           path: '/setting',
           name: 'setting',
           component: Setting
       },
       {
           path: '/post',
           name: 'post',
           component: Post
       },
   ]
});

export default router