<template>
    <div>
        <h1>Welcome to your Dashboard, User {{ id }}</h1>
        <!-- Add dashboard content here -->
    </div>
</template>

<script>
export default {
    name: 'Dashboard',
    props: ['id'],
    mounted() {
        console.log('Dashboard loaded for user with ID:', this.id);
        // You can fetch additional data based on the user ID if needed
    }
}
</script>

<style scoped>
/* Add styles for your dashboard here */
</style>
