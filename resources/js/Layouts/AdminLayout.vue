<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header style="background-color: greenyellow; padding: 10px;">
      <Link style="margin-right: 10px;" href="/">Home</Link>
      <Link style="margin-right: 10px;" href="/user">User</Link>
      <Link style="margin-right: 10px;" href="/upload-file">Upload FIle</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>