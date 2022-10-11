<script>
export default {
  props: ["image"],
};
</script>
<template>
  <div class="rounded-3">
    <div>
      <img :src="image" />
    </div>
    <slot></slot>
  </div>
</template>
