<template>
    <div class="p-4 max-w-4xl mx-auto">
        <h1 class="text-xl font-bold mb-4">Insert Data</h1>
        <form @submit.prevent="createItem" class="space-y-4">
            <input type="text" v-model="newItem.name" placeholder="Enter name" required class="border p-2 w-full rounded"><br>
            <input type="submit" value="Create" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer w-full sm:w-auto">
        </form>
    </div>

    <div class="p-4 max-w-4xl mx-auto">
        <h1 class="text-xl font-bold mb-4">All Data</h1>
        <div class="overflow-x-auto">
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
                        <button class="bg-yellow-500 text-white px-4 py-1 rounded">Update</button>
                    </td>
                    <td class="border px-4 py-2 text-center">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <router-view/>
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
