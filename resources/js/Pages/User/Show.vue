<template>
    <Layout>
        <Head :title="title" />
        <h1 v-text="title"></h1>
        <ul>
            <li>
                <h3>{{ user.name }}</h3>
                <p>Email: <strong>{{ user.email }}</strong></p>
                <p>{{ user.created_at }}</p>
                <Link href="/users">Kembali</Link>
                <a href="" @click.prevent="delete_user">Delete</a>
                <Link :href="`/users/${user.id}/edit`">Edit</Link>
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
    props: [ 'title', 'user' ],
    methods: {
        delete_user() {
            if(confirm('data user ingin dihapus?')) {
                this.$inertia.delete('/users/' + this.user.id)
            } else {
                return false;
            }
        }
    }

}
</script>
<style>
    
</style>