<script>
import btn from './components/btn.vue'
import BaseLayout from './base-layout.vue'

export default {
    name: 'Application',
    components: { btn, BaseLayout },
    data() {
        return {
            count: 0
        }
    },
    methods: {
        increment() {
            this.count++;
        }
    },
    mounted() {
        console.log("mounted")
    }
}
</script>
<template>
    <router-view/>
    <BaseLayout>
        <template #header>
            <h1>Here might be a page title</h1>
        </template>
        <div>this is a template vue</div>
        <btn @click="increment">count {{count}}</btn>
    </BaseLayout>
</template>
