<script setup>
    import PublicLayout from '../../Layouts/PublicLayout.vue';

    defineProps({
        user: Object
    })
</script>

<template>
    <PublicLayout>
        <h1>Ini adalah halaman user</h1>
        <h2>Anda adalah {{ user.name }} ({{ user.age }})</h2>
    </PublicLayout>
</template>
