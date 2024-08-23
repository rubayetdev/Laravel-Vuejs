<template>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Update Your Name</h1>
        <form @submit.prevent="updateItem">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Your Id: {{ id }}</label>
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input
                    type="text"
                    id="name"
                    v-model="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your name"
                />
            </div>
            <button
                type="submit"
                class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">
                Update
            </button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            id: this.$route.params.id,
            name: '',
        };
    },
    mounted() {
        this.fetchItemData();
    },
    methods: {
        fetchItemData() {
            fetch(`/items/${this.id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.name = data.item.name;
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error fetching item data:', error);
                });
        },
        updateItem() {
            axios.put(`/items/${this.id}`, {
                name: this.name
            })
                .then(response => {
                    console.log(response);
                    this.$toast.success('Data Updated Successfully');
                    this.$router.push({ name: 'withoutData' });
                })
                .catch(error => {
                    console.error(error);
                    this.$toast.error('Data Update Failed');
                });
        }

    },
};
</script>
