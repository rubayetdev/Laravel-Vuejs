import './bootstrap';
import { createApp } from 'vue';
import Toaster from "@meforma/vue-toaster";
import CrudComponent from './components/navComponent.vue';
// import DataComponent from './components/DataShow.vue';
import router from "@/router";



const app = createApp({});




app.component('crud-component', CrudComponent);
// app.component('data-component', DataComponent);






app.use(Toaster, {
    position: "top-right",
});
app.use(router);
app.mount('#app');
