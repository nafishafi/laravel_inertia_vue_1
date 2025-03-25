<script setup>
    // import PublicLayout from '../Layouts/PublicLayout.vue';
    import { Head } from '@inertiajs/vue3'
    import { useForm } from '@inertiajs/vue3'

    const form = useForm({
        gambar: null,
    })
        
    function submit() {
    form.post('/upload-file')
    }
</script>

<template>  
    <Head>
        <title>Project Inertia - File Upload</title>
        <meta name="description" content="My project Inertia">
    </Head>
    <h3>Upload File</h3>
    <form @submit.prevent="submit">
    <input type="file" @input="form.gambar = $event.target.files[0]" />
    <button type="submit">Submit</button>
  </form>
</template>