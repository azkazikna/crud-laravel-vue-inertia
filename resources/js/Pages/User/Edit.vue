<template>
    <Layout>
        <Head :title="title"></Head>
        <h1>{{ title }}</h1>
        <form @submit.prevent="update">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" v-model="form.name"><br>
                <span v-if="errors.name" class="error">{{ errors.name }}</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" v-model="form.email"><br>
                <span v-if="errors.email" class="error">{{ errors.email }}</span>
            </div>

            <button type="submit">Update</button>
        </form>
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
    data() {
        return {
            form: {
                name: this.user.name,
                email: this.user.email,
            }
        }  
    },
    props: [ 'title', 'errors', 'user'],
    methods: {
        update() {
            this.$inertia.put('/users/' + this.user.id , this.form)
        }
    }
}
</script>
<style>
    .form-group {
        margin-bottom: 5px;
    }

    .error {
        color: red;
    }
</style>