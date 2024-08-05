<script setup>
import Nav from "../Shared/Nav.vue";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    time: String
})
</script>

<template>
    <h1>Users</h1>
    <Nav/>
    <div style="margin-top: 400px">
        The current time is: {{ props.time }}
        <Link class="text-blue-500" href="/users" preserve-scroll>Refresh</Link>
    </div>
</template>
