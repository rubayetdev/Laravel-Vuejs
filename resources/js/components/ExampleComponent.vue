<template>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-gray-800 text-white text-lg font-semibold p-4 rounded-t-lg">
                404 | Not Found
            </div>
            <div class="p-6">
                <router-link to="/" class="text-blue-500 hover:underline">Go to Home Page</router-link>
            </div>
        </div>
    </div>
</div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
