<script setup>
    // import PublicLayout from '../../Layouts/PublicLayout.vue';
    import { Head } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    import { useForm } from '@inertiajs/vue3'

    const form = useForm({
        name: null,
        email: null,
        password: null,
    })

    function submit() {
        form.post('/user')
    }
</script>

<template>
        <Head>
            <title>Add New User</title>
        </Head>
        <div class="container">
            <h1>Add New User</h1>

            <div class="col-12 col-md-6">
                <form @submit.prevent="submit">
                    <div class="mg-3">
                        <label for="name">Name:</label>
                        <input class="form-control" id="name" v-model="form.name" />
                        <div class="text-danger" v-if="form.errors.name">{{ form.errors.name }}</div>
                    </div>
                    <div class="mg-3">
                        <label for="email">Email:</label>
                        <input class="form-control" id="email" v-model="form.email" />
                        <div class="text-danger" v-if="form.errors.email">{{ form.errors.email }}</div>
                    </div>
                    <div class="mg-3">
                        <label for="password">Password:</label>
                        <input class="form-control" id="password" type="password" v-model="form.password" />
                        <div class="text-danger" v-if="form.errors.password">{{ form.errors.password }}</div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
</template>
