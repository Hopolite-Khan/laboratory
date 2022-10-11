<template>
  <h1
    class="text-primary fw-bold text-capitalize text-center title position-relative mb-5"
  >
    <slot></slot>
  </h1>
</template>
<style>
.title {
  position: relative;
  margin-inline: auto;
}
.title::after {
  content: "";
  width: 60%;
  height: 1px;
  border-bottom: 5px solid #500091;
  position: absolute;
  left: 0;
  bottom: -10px;
  border-radius: 500px;
}
</style>
