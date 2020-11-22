import Vue from 'vue';
import Router from 'vue-router';

import Index from '../Pages/index.vue';
import Post from "../Pages/post.vue";


Vue.use(Router);

const routes = [
    {
        name: 'index',
        path: '/',
        component: Index
    },
    {
        name: 'post',
        path: '/post',
        component: Post
    },

];

export default new Router({
    mode: 'history',
    linkExactActiveClass: 'is-active',
    routes
});