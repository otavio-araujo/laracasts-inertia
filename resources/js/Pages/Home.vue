<script setup>
const props = defineProps({
    name: String,
    frameworks: Array,
})
</script>

<template>
    <h1>Hello World - {{ props.name }}</h1>
    <p>In this series we will work with the following frameworks:</p>
    <ul>
        <li v-for="framework in props.frameworks" v-text="framework"></li>
    </ul>
</template>
