<script>
import Navigation from "./components/navigation.vue";
    export default {
        components: {
            Navigation
        }
    }
</script>
<template>
    <div>
        <Navigation/>
        <header class="container">
            <slot name="header"></slot>
        </header>
        <main class="container">
            <slot></slot>
        </main>
        <footer class="container">footer</footer>
    </div>
</template>
