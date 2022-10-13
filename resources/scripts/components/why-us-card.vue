<script>
export default {
  props: ["image"],
};
</script>
<template>
  <div class="p-2 rounded-4 funcy-card">
    <div class="bg-light rounded-3 p-4 d-flex flex-column align-items-center gap-3">
      <img :src="image" class="py-3 size" />
      <p class="text-center h5 pt-3">
        <slot></slot>
      </p>
    </div>
  </div>
</template>
<style>
:root {
  --p: 15px;
  --animation: all 0.3s ease-in-out;
  --gradient: linear-gradient(90deg, #540099, #5623ef);
}
.funcy-card {
  position: relative;
  background-image: var(--gradient);
  translate: 0 0;
  transition: var(--animation);
}
.funcy-card:hover {
  translate: 0 -15px;
  transition: var(--animation);
  cursor: pointer;
}
.size {
  --s: 9rem;
  height: var(--s);
  width: var(--s);
}
.funcy-card::after {
  content: " ";
  width: 100%;
  height: 100%;
  position: absolute;
  left: -15px;
  top: var(--p);
  filter: blur(var(--p));
  z-index: -10;
  opacity: 0.6;
  background-image: var(--gradient);
  transition: var(--animation);
}
.funcy-card:hover::after {
  filter: blur(20px);
  transition: var(--animation);
}
</style>
