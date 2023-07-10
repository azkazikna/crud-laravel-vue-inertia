<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header>
      <Link href="/home">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/users">User</Link>
    </header>
    <article>
      <slot />
    </article>
    <footer>
        <p>&copy; Azkazikna Ageung Laksana</p>
    </footer>
  </main>
</template>