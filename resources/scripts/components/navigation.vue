<script>
import Link from "./Link.vue";
import Logo from "../../images/logo.svg";
export default {
  components: { Link },
  computed: {
    button() {
      return {
        "btn-outline-light": this.$route.name !== "Home",
        "btn-primary": this.$route.name === "Home",
      };
    },
    navigation() {
      return { "bg-primary": this.$route.name !== "Home" };
    },
    light() {
      return { light: this.$route.name !== "Home" };
    },
  },
  setup() {
    return {
      Logo,
    };
  },
};
</script>
<template>
  <nav class="d-flex" :class="navigation">
    <ul class="container d-flex align-items-center" style="gap: 2rem">
      <li>
        <router-link :to="{ name: 'Home' }">
          <img :src="Logo" id="logo" :class="light" />
        </router-link>
      </li>
      <ul class="navigation d-flex gap-3 align-items-center ms-auto px-4 rounded-pill">
        <li>
          <Link class="d-flex h-100 py-3" url="Home">Home</Link>
        </li>
        <li>
          <Link class="d-flex h-100 py-3" url="Labs">Labs</Link>
        </li>
        <li>
          <Link class="d-flex h-100 py-3" url="Services">Services</Link>
        </li>
        <li>
          <Link class="d-flex h-100 py-3" url="Appointment">Appointment</Link>
        </li>
        <li>
          <Link class="d-flex h-100 py-3" url="Contact">Contact</Link>
        </li>
        <li>
          <Link class="d-flex h-100 py-3" url="About">About</Link>
        </li>
        <li class="ms-5">
          <button class="btn rounded-pill px-3" :class="button">Log in &#11208;</button>
        </li>
      </ul>
    </ul>
  </nav>
</template>
<style>
.primary {
  font-weight: bold;
  color: #fff;
  box-shadow: 0 0 0 1px #fff;
}
.primary:hover {
  box-shadow: none;
  background-color: #fff;
  color: hsl(273, 100%, 30%);
}

#logo {
  height: 40px;
  width: 40px;
}

.light {
  filter: brightness(5) grayscale(9) invert(1);
}

#logo:hover {
  cursor: pointer;
}

nav {
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1000;
}

.gap-4 {
  gap: 3rem;
}
</style>
