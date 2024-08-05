<template>
    <Head>
        <title>Users</title>
        <meta content="My App - Users Information" head-key="description" type="description"/>
    </Head>
    <h1 class="text-4xl font-bold">Users</h1>

    <div style="margin-top: 400px">
        The current time is: {{ props.time }}
        <Link class="text-blue-500" href="/users" preserve-scroll>Refresh</Link>
    </div>

</template>

<script setup>
import {Head, Link} from "@inertiajs/vue3";

const props = defineProps({
    time: String
})
</script>
