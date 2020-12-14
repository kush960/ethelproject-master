require('../bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Uploads from '../views/Uploads.vue'
import Medicines from '../views/Medicines.vue'


Vue.use(VueRouter);

const routes = [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/',
            name: 'about',
            component: About
        },
        {
            path: '/uploads',
            name: 'uploads',
            component: Uploads
            
        },
        {
            path: '/medicines',
            name: 'medicines',
            component: Medicines
        }

    ]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
