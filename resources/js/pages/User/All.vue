<script setup>
    // import PublicLayout from '../../Layouts/PublicLayout.vue';
    import { Head } from '@inertiajs/vue3'
    
    defineProps({
        user: Object
    })

    // defineOptions({ layout: PublicLayout})
</script>

<template>
        <Head>
            <title>Project Inertia - User</title>
        </Head>
        <h1>Ini adalah halaman user</h1>
        <h2>Anda adalah {{ user.name }} ({{ user.age }})</h2>
        <br>
        <br>
        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ben</td>
                <td>20</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Meg</td>
                <td>22</td>
            </tr>
        </tbody>
    </table>
</template>
