<script setup>
import NavLink from "./NavLink.vue";
</script>

<template>
    <nav>
        <ul class=" flex list-disc list-inside space-x-4">
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
