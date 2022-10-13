<script>
import navigation from "../components/navigation.vue";
export default {
  components: { navigation },
  computed: {
    currentPage() {
      var p = this.$route.name;
      if (p !== "Home") return this.$route.name;
    },
  },
};
</script>
<template>
  <navigation />
  <header class="pt-5">
    <h1 class="pt-5 text-center" style="z-index: 100">{{ currentPage }}</h1>
    <slot name="header"></slot>
  </header>
  <main class="container" style="min-height: calc(100vh-5rem)">
    <router-view></router-view>
  </main>
  <footer class="py-5 mt-auto bg-primary">
    <div class="container">footer</div>
  </footer>
</template>
