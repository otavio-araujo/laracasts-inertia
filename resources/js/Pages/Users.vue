<template>
    <Head>
        <title>Users</title>
        <meta content="My App - Users Information" head-key="description" type="description"/>
    </Head>
    <h1 class="text-4xl font-bold">Users</h1>
    <ul>
        <li v-for="user in users" key="user.id" v-text="user.name"></li>
    </ul>

</template>

<script setup>
import {Head} from "@inertiajs/vue3";

const props = defineProps({
    users: Array
})
</script>
