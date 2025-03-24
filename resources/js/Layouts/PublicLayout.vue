<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
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