import * as Vue from 'vue';
import VueRouter from 'vue-router';


import CreateBlog from './pages/CreateBlog.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/blog/create',
            name: 'create-blog',
            component: CreateBlog
        },
    ]
});

export default routes;