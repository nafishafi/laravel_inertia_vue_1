<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <!-- <Head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </Head> -->
  <main>
    <header style="background-color: aquamarine; padding: 10px;">
      <Link style="margin-right: 10px;" href="/">Home</Link>
      <Link href="/user">User</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>