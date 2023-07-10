<template>
    <Layout>
        <Head :title="title" />
        <h1>Daftar {{ title }}</h1>
        <Link href="/users/create">Create</Link>

        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <ul>
            <li v-for="item in data" :key="item.id">
                <p>{{ item.name }}</p>
                <Link :href="`/users/${item.id}`">Lihat user</Link>
            </li>
        </ul>
    </Layout>
</template>
<script>
import { Link, Head } from '@inertiajs/vue3'
import Layout from '../../Shared/Layout.vue'

export default {
    components: {
        Link,
        Head,
        Layout
    },
    props: [ 'title', 'data' ],

}
</script>
<style>
    
</style>