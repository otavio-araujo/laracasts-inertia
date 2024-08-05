<script setup>
import {Link} from "@inertiajs/vue3";
import Layout from "../Shared/Layout.vue";

defineOptions({layout: Layout})

const props = defineProps({
    time: String
})
</script>

<template>

    <h1 class="text-4xl font-bold">Users</h1>

    <div style="margin-top: 400px">
        The current time is: {{ props.time }}
        <Link class="text-blue-500" href="/users" preserve-scroll>Refresh</Link>
    </div>

</template>
