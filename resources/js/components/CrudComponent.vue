<!--<script setup>-->

<!--import {useRouter} from "vue-router";-->

<!--const router = useRouter();-->

<!--const gotoPage = () => {-->
<!--    if (router) {-->
<!--        router.push('/withoutData');-->
<!--    } else {-->
<!--        console.error('Router instance is not available');-->
<!--    }-->
<!--};-->

<!--</script>-->
<template>
    <div class="p-4 max-w-4xl mx-auto">
        <h1 class="text-xl font-bold mb-4">Insert Data</h1>
        <form @submit.prevent="createItem" class="space-y-4">
            <input type="text" v-model="newItem.name" placeholder="Enter name" required class="border p-2 w-full rounded"><br>
            <input type="submit" value="Create" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer w-full sm:w-auto">
        </form>
        
        
        <main>

            <router-view/>

        </main>
    </div>
</template>


<script>
export default {

    data() {
        return {
            newItem: {
                name: '',
            },

            allData:[]
        };
    },

    mounted() {
        console.log('Mounted');
        axios.get('/items').then(response=>{

            this.allData = response.data;
        }
        ).catch(error=>{
            console.log('Error');
        })
    },

    methods: {
        createItem(){
            axios.post('/Positems',this.newItem).then(
                response => {
                    console.log(response);
                    //this.allData.push(response.data.data);
                    // this.fetchData();
                    this.$toast.success('Data Insert Successfully');
                }
            ).catch(error=>{
                this.$toast.error('Data Insert Failed');
            })
        },
        
    },


}
</script>
