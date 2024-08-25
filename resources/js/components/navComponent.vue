<template>
    <nav class="bg-gray-800 p-4 flex justify-between items-center">
        <div class="text-white text-2xl font-bold">MyWebsite</div>
        <ul class="flex space-x-6">
            <li v-if="isLoggedIn">
                <router-link to="/" class="text-white hover:text-gray-300">{{ username }}</router-link>
            </li>
            <li v-if="!isLoggedIn">
                <router-link to="/" class="text-white hover:text-gray-300">Home</router-link>
            </li>
            <li v-if="!isLoggedIn">
                <router-link to="/withoutData" class="text-white hover:text-gray-300">About</router-link>
            </li>
            <li v-if="!isLoggedIn">
                <a href="#" class="text-white hover:text-gray-300">Services</a>
            </li>
            <li v-if="!isLoggedIn">
                <router-link to="/login">
                    <a href="" class="text-white hover:text-gray-300">Login</a>
                </router-link>
            </li>
            <li v-if="isLoggedIn">
                <router-link to="/profile" class="text-white hover:text-gray-300">Profile</router-link>
            </li>
            <li v-if="isLoggedIn">
                <a href="#" @click.prevent="logout" class="text-white hover:text-gray-300">Logout</a>
            </li>
        </ul>
    </nav>

    <router-view/>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';

// Determine if the user is logged in
const isLoggedIn = ref(false);
const router = useRouter();

// Check login status on component mount
onMounted(() => {
    const token = localStorage.getItem('token');
    isLoggedIn.value = !!token;
    const user = JSON.parse(localStorage.getItem('user') || '{}');
    username.value = user.name || '';
});
// const homeLink = computed(() => {
//     if (isLoggedIn.value) {
//         const user = JSON.parse(localStorage.getItem('user') || '{}');
//         return `/home/${user.id}`;
//     }
//     return '/home';
// });
// Logout function
const logout = async () => {
    try {
        await axios.post('/api/logout');
        localStorage.removeItem('token');
        localStorage.removeItem('user');
        router.push('/login');
    } catch (error) {
        console.error('Logout failed:', error);
    }
};
</script>
