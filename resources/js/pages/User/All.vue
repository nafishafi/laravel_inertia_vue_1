<script setup>
    // import PublicLayout from '../../Layouts/PublicLayout.vue';
    import { Head } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    
    defineProps({
        users: Object
    })

    function goToAddUser() {
        router.get('/user/add')
    }
    // defineOptions({ layout: PublicLayout})
</script>

<template>
        <Head>
            <title>Project Inertia - User</title>
        </Head>
        <div class="container">
            <h1>User List</h1>
            <div>
                <!-- <a class="btn btn-info" href="/user/add">Add New</a> -->
                <button class="btn btn-success" @click="goToAddUser()">Add New</button>
            </div>
            <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user, index) in users" :key="index">
                    <td>{{ index+1 }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </tbody>
            </table>
        </div>
</template>
