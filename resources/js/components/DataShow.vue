<template>
    <div class="p-4 max-w-4xl mx-auto">
        <h1 class="text-xl font-bold mb-4">All Data</h1>
        <div class="overflow-x-auto">

            <!--            <img src="testPic/reanimal.jpg" class="rounded px-2 py-4" width="50%" height="50%">-->
            <table class="table-auto w-full">

                <thead>
                <tr>
                    <th class="px-4 py-2 text-left">Id</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Update</th>
                    <th class="px-4 py-2 text-left">Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="value in allData" :key="value.id" class="hover:bg-gray-100">
                    <td class="border px-4 py-2">{{ value.id }}</td>
                    <td class="border px-4 py-2">{{ value.name }}</td>
                    <td class="border px-4 py-2 text-center">
                    <router-link :to="{name: 'withData',params: {id:value.id}}">
                        <button class="bg-yellow-500 text-white px-4 py-1 rounded">Update</button>
                        </router-link>
                    </td>
                    <td class="border px-4 py-2 text-center">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>

    <router-view/>
</template>

<script>
export default {

    data() {
        return {
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



}
</script>

<style scoped>

</style>
