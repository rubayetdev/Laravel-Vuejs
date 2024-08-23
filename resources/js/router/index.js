import {createRouter,createWebHistory} from "vue-router";

import home from '../components/CrudComponent.vue'
import dataPage from '../components/DataShow.vue';
import notFound from '../components/ExampleComponent.vue'
import withDataPage from '../components/withData.vue'
import confirmModel from "@/components/ConfirmModel.vue";

const routes =[
    {
        path:'/',
        name: 'home',
        component: home,
    },
    {
        path:'/withoutData',
        name: 'withoutData',
        component: dataPage,
    },
    {
        path:'/withData/:id',
        name: 'withData',
        component: withDataPage,
    },
    {
        path:'/confirmModel/:id',
        name: 'confirmModel',
        component: confirmModel,
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'notFound',
        component: notFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
