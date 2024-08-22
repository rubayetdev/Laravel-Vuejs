<template>
	<nav class="bg-gray-800 p-4 flex justify-between items-center">
    <div class="text-white text-2xl font-bold">MyWebsite</div>
    <ul class="flex space-x-6">
        <li>
            <router-link to="/" class="text-white hover:text-gray-300">Home</router-link>
        </li>
        <li>
            <router-link to="/withoutData" class="text-white hover:text-gray-300">About</router-link>
        </li>
        <li>
            <a href="#" class="text-white hover:text-gray-300">Services</a>
        </li>
        <li>
            <a href="#" class="text-white hover:text-gray-300">Contact</a>
        </li>
    </ul>
</nav>


	    <router-view/>
</template>