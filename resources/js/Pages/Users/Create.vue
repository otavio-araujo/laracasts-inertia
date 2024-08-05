<template>
    <Head title="Create Users"/>
    <h1 class="text-3xl">Create a New User</h1>

    <form class="max-w-md mx-auto mt-8" @submit.prevent="submit">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name"> Name </label>

            <input id="name"
                   v-model="form.name"
                   class="border border-gray-400 p-2 w-full"
                   name="name"
                   required
                   type="text"/>
            <div v-if="form.errors.name" class="mt-2 text-xs font-semibold text-red-700"
                 v-text="form.errors.name">
            </div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Email </label>

            <input
                id="email"
                v-model="form.email"
                class="border border-gray-400 p-2 w-full"
                name="email"
                required
                type="email"
            />
            <div v-if="form.errors.email" class="mt-2 text-xs font-semibold text-red-700"
                 v-text="form.errors.email">
            </div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password"> Password </label>

            <input
                id="password"
                v-model="form.password"
                class="border border-gray-400 p-2 w-full"
                name="password"
                required
                type="password"
            />
            <div v-if="form.errors.password" class="mt-2 text-xs font-semibold text-red-700"
                 v-text="form.errors.password">
            </div>
        </div>

        <div class="mb-6">
            <button :disabled="form.processing"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    type="submit">Submit
            </button>
        </div>
    </form>
</template>

<script setup>
import {Head, useForm} from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: ""
});

const submit = () => {
    form.post("/users");
}
</script>
