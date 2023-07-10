<template>
    <Layout>
        <h1>Hello {{ title }}!</h1>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue';
import { Link } from '@inertiajs/vue3'

export default {
    components: {
        Link,
        Layout
    },
    props: ['title']
}
</script>

<style>
    
</style>