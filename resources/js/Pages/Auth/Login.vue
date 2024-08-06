<template>
    <Head title="Login Page"/>
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl border max-w-md mx-auto mt-8">
            <h1 class="text-3xl mb-6">Login</h1>

            <form @submit.prevent="submit">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Email </label>

                    <input
                        id="email"
                        v-model="form.email"
                        class="border rounded p-2 w-full"
                        name="email"
                        required
                        type="email"
                    />
                    <div v-if="form.errors.email" class="mt-2 text-xs font-semibold text-red-700"
                         v-text="form.errors.email">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password </label>

                    <input
                        id="password"
                        v-model="form.password"
                        class="border rounded p-2 w-full"
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
                            type="submit">Log in
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>

<script setup>
import {Head, useForm} from "@inertiajs/vue3";

defineOptions({layout: null});

const form = useForm({
    email: "",
    password: ""
});

const submit = () => {
    form.post("/login");
}

</script>
