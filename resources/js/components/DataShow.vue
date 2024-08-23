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
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Password</th>
                    <th class="px-4 py-2 text-left">Update</th>
                    <th class="px-4 py-2 text-left">Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="value in allData" :key="value.id" class="hover:bg-gray-100">
                    <td class="border px-4 py-2">{{ value.id }}</td>
                    <td class="border px-4 py-2">{{ value.name }}</td>
                    <td class="border px-4 py-2">{{ value.email }}</td>
                    <td class="border px-4 py-2">{{ value.password }}</td>
                    <td class="border px-4 py-2 text-center">
                    <router-link :to="{name: 'withData',params: {id:value.id}}">
                        <button class="bg-yellow-500 text-white px-4 py-1 rounded">Update</button>
                        </router-link>
                    </td>
                    <td class="border px-4 py-2 text-center">
                        <button @click="openDeleteModal(value.id)" class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <confirmModel
            v-if="showModal"
            :isVisible="showModal"
            title="Delete Item"
            message="Are you sure you want to delete this item?"
            @confirm="deleteItem"
            @cancel="closeModal"
        />
    </div>

    <router-view/>
</template>

<script>
import confirmModel from "@/components/ConfirmModel.vue";
// export default {
//
//     data() {
//         return {
//             allData:[]
//         };
//     },
//
//     mounted() {
//         console.log('Mounted');
//         axios.get('/items').then(response=>{
//
//                 this.allData = response.data;
//             }
//         ).catch(error=>{
//             console.log('Error');
//         })
//     },
// }

export default {
    components: {
        confirmModel,
    },
    data() {
        return {
            allData: [],
            showModal: false,
            itemToDelete: null,
        };
    },
    mounted() {
        axios.get('/items')
            .then(response => {
                this.allData = response.data;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    },
    methods: {
        openDeleteModal(id) {
            this.itemToDelete = id;
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
            this.itemToDelete = null;
        },
        deleteItem() {
            axios.delete(`/items/${this.itemToDelete}`)
                .then(response => {
                    this.$toast.success('Item deleted successfully');
                    this.allData = this.allData.filter(item => item.id !== this.itemToDelete);
                    this.closeModal();
                })
                .catch(error => {
                    console.error('Error deleting item:', error);
                    this.$toast.error('Failed to delete item');
                    this.closeModal();
                });
        },
    },
};
</script>

<style scoped>

</style>
