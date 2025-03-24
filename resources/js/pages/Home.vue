<script setup>
    // import PublicLayout from '../Layouts/PublicLayout.vue';
    import { Head } from '@inertiajs/vue3'
    // defineOptions({ layout: PublicLayout})
</script>

<template>  
    <Head>
        <title>Project Inertia - My App</title>
        <meta name="description" content="My project Inertia">
    </Head>
    <h1>Welcome Home</h1>
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