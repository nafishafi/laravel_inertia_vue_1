<script setup>
    import PublicLayout from '../../Layouts/PublicLayout.vue';

    defineProps({
        user: Object
    })

    defineOptions({ layout: PublicLayout})
</script>

<template>
        <h1>Ini adalah halaman user</h1>
        <h2>Anda adalah {{ user.name }} ({{ user.age }})</h2>
</template>
