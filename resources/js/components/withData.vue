<template>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Enter Your Name</h1>
        <form>
            <div class="mb-4">
            	<label for="name" class="block text-gray-700 text-sm font-bold mb-2">Your Id: {{id}}</label>
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
                class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600"
            >
                Submit
            </button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            id: this.$route.params.id,
        };
    }
};

// export default {
//     data() {
//         return {
//             userId: this.$route.params.id, // Set userId from route params
//             name: '',
//             user: null,
//             loading: true,
//             error: null,
//         };
//     },
//     created() {
//         this.fetchUser();
//     },
//     methods: {
//         fetchUser() {
//             axios.get(`/items/${this.userId}`) // Corrected URL
//                 .then(response => {
//                     this.user = response.data;
//                     this.name = this.user.name; // Initialize name with user data
//                     this.loading = false;
//                 })
//                 .catch(error => {
//                     console.error('Error fetching user:', error);
//                     this.error = 'User not found or server error.';
//                     this.loading = false;
//                 });
//         }
//     }
// };
</script>
