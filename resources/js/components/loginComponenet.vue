<script>
export default {
    data() {
        return {
            email: '',
            password: ''
        };
    },
    methods: {
        login() {
            axios.post('/login',this.login).then(
                response => {
                    console.log(response);
                    //this.allData.push(response.data.data);
                    // this.fetchData();
                    this.$toast.success('Logged Successfully');
                }
            ).catch(error=>{
                this.$toast.error('Data Insert Failed');
            })
        }
    }
};
</script>

<template>
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-10 rounded-lg shadow-xl w-full max-w-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Login</h2>
            <form @submit.prevent="login">
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" v-model="login.email" id="email" name="email" required
                           class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" v-model="login.password" id="password" name="password" required
                           class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
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

<style scoped>

</style>
