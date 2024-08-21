import {createRouter,createWebHistory} from "vue-router";

import dataPage from '../components/DataShow.vue';

const routes =[
    {
        path:'/withoutData',
        name: 'withoutData',
        component: dataPage,
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default
