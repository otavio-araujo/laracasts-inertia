<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <Link class="text-blue-500 hover:underline" href="/">Home</Link>
            </li>
            <li>
                <Link class="text-blue-500 hover:underline" href="/users">Users</Link>
            </li>
            <li>
                <Link class="text-blue-500 hover:underline" href="/settings">Settings</Link>
            </li>
            <li>
                <Link as="button" class="text-blue-500 hover:underline" href="/logout" method="post">Log Out</Link>
            </li>
        </ul>
    </nav>
</template>
