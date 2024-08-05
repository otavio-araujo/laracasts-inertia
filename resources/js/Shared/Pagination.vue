<template>
    <div>
        <Link
            v-for="link in links"
            :class="{ 'text-slate-100 bg-slate-500': ! link.url, 'font-bold bg-sky-800': link.active }"
            :disabled="link.active"
            :href="link.url"
            as="button"
            class="px-3 py-1 rounded-full bg-slate-900 text-white"
            v-html="link.label"

        />

    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    links: Array
})
</script>
