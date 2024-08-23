import './bootstrap';
import { createApp } from 'vue';
import Toaster from "@meforma/vue-toaster";
import CrudComponent from './components/navComponent.vue';
import DataComponent from './components/footerComponenet.vue';
import loginComponenet from './components/loginComponenet.vue';
import router from "@/router";



const app = createApp({});




app.component('crud-component', CrudComponent);
app.component('data-component', DataComponent);
app.component('login-component', loginComponenet);






app.use(Toaster, {
    position: "top-right",
});
app.use(router);
app.mount('#app');
