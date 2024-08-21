

import './bootstrap';
import { createApp } from 'vue';
import Toaster from "@meforma/vue-toaster";


// import router from '@/router';

const app = createApp({});

import CrudComponent from './components/CrudComponent.vue';
import DataShow from './components/DataShow.vue';
app.component('crud-component', CrudComponent);
app.component('data-component', DataShow);





app.mount('#app');
app.use(Toaster, {
    position: "top-right",
});
app.use(router);
