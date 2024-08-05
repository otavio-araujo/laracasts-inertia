<script setup>
import Nav from "./Nav.vue";


import {computed} from 'vue'
import {usePage} from '@inertiajs/vue3'

const page = usePage()

const username = computed(() => page.props.auth.user.username)

</script>

<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="text-lg font-bold">My app</h1>
                <p class="ml-4">Welcome back, {{ username }}</p>
            </div>
            <Nav/>
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot/>
        </div>
    </section>
</template>
