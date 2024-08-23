<!-- ConfirmModal.vue -->
<template>
    <div v-if="isVisible" class="fixed inset-0 z-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full relative z-10">
            <h2 class="text-lg font-bold mb-4">{{ title }}</h2>
            <p class="mb-4">{{ message }}</p>
            <div class="flex justify-end">
                <button @click="cancel" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Cancel</button>
                <button @click="confirm" class="bg-red-500 text-white px-4 py-2 rounded">Confirm</button>
            </div>
        </div>
        <div class="fixed inset-0 bg-black opacity-50 z-0"></div>
    </div>
</template>

<script>
export default {
    props: {
        isVisible: {
            type: Boolean,
            default: false,
        },
        title: {
            type: String,
            default: 'Confirm',
        },
        message: {
            type: String,
            default: 'Are you sure you want to perform this action?',
        },
    },
    methods: {
        confirm() {
            this.$emit('confirm');
        },
        cancel() {
            this.$emit('cancel');
        },
    },
};
</script>

<style scoped>
/* Additional styles if needed */
</style>
