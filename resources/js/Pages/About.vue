<template>
    <Layout>
        <Head title="About" />
        <h1 v-text="name"></h1>
    </Layout>
</template>
<script>
import Layout from '../Shared/Layout.vue'
import { Link, Head } from '@inertiajs/vue3'

export default {
    components: {
        Link,
        Layout,
        Head
    },
    props: ['name']
}
</script>
<style>
    
</style>