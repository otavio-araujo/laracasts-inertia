<script setup>
import NavLink from "./NavLink.vue";
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <NavLink :active="$page.component === 'Home'" href="/">
                    Home
                </NavLink>
            </li>

            <li>
                <NavLink :active="$page.component === 'Users'" href="/users">
                    Users
                </NavLink>
            </li>

            <li>
                <NavLink :active="$page.component === 'Settings'" href="/settings">
                    Settings
                </NavLink>
            </li>
        </ul>
    </nav>
</template>
