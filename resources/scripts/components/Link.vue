<script>
export default {
  props: ["url"],
};
</script>
<template>
  <router-link
    :to="{ name: url }"
    class="link"
    :class="{ active: this.$route.name === url }"
  >
    <slot></slot>
  </router-link>
</template>
<style>
a.link {
  color: hsl(0, 0%, 100%);
  font-size: 1rem;
  position: relative;
  transition: all 0.3s ease-in-out;
}

a.link:hover {
  color: hsla(0, 0%, 100%, 50%);
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

a.link::after {
  content: "";
  position: absolute;
  bottom: 0;
  border-radius: 10px;
  width: 0%;
  height: 1px;
  left: 0;
  border-bottom: 3px solid hsl(0, 0%, 100%);
  transition: all 0.3s ease-in-out;
}

a.link:hover::after {
  width: 100%;
  transition: all 0.3s ease-in-out;
}

a.active::after {
  content: "";
  position: absolute;
  bottom: 0%;
  border-radius: 10px;
  width: 100%;
  height: 1px;
  left: 0;
  border-bottom: 3px solid hsl(0, 0%, 100%);
  transition: all 0.3s ease-in-out;
}
</style>
