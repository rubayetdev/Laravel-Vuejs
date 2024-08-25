<template>
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-10 rounded-lg shadow-xl w-full max-w-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Login</h2>
            <form @submit.prevent="validateAndLogin">
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" v-model="email" id="email" name="email" required
                           class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    <p v-if="showErrorEmail" class="text-red-500 text-sm mt-2">Email is required.</p>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" v-model="password" id="password" name="password" required
                           class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    <p v-if="showErrorPassword" class="text-red-500 text-sm mt-2">Password is required.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                        Sign In
                    </button>
                    <a href="#" class="inline-block align-baseline font-semibold text-sm text-blue-600 hover:text-blue-800">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const email = ref('');
const password = ref('');
const showErrorEmail = ref(false);
const showErrorPassword = ref(false);

const validateAndLogin = async () => {
    showErrorEmail.value = !email.value;
    showErrorPassword.value = !password.value;

    if (showErrorEmail.value || showErrorPassword.value) {
        return;
    }

    try {
        const response = await axios.post('/api/login', {
            email: email.value,
            password: password.value
        });

        const token = response.data.authorisation.token;
        const user = response.data.user;

        if (token) {
            localStorage.setItem('token', token);
            localStorage.setItem('user', JSON.stringify(user));

            // Redirect to dashboard with user ID as a parameter
            window.location.href = `/dashboard/${user.id}`;
            // this.$notify('Login Successfully')
        } else {
            console.error('Token not received');
            // Optionally show an error message to the user
        }
    } catch (error) {
        console.error(error);
        // Optionally show an error message to the user
    }
}
</script>

