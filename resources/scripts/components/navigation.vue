<script>
import Link from "./Link.vue";
import Logo from "../../images/logo.svg";
export default {
  components: { Link },
  computed: {
    button() {
      return {
        primary: this.$route.name !== "Home",
        "btn-primary": this.$route.name === "Home",
      };
    },
    navi() {
      return { nav: this.$route.name !== "Home" };
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
  <nav class="d-flex py-2" :class="navi">
    <ul class="container d-flex align-items-center" style="gap: 2rem">
      <li>
        <router-link :to="{ name: 'Home' }">
          <img :src="Logo" id="logo" :class="light" />
        </router-link>
      </li>
      <ul
        class="navigation d-flex gap-3 align-items-center py-2 ms-auto px-4 rounded-pill"
      >
        <li>
          <Link url="Home">Home</Link>
        </li>
        <li>
          <Link url="Labs">Labs</Link>
        </li>
        <li>
          <Link url="Services">Services</Link>
        </li>
        <li>
          <Link url="Appointment">Appointment</Link>
        </li>
        <li>
          <Link url="Contact">Contact</Link>
        </li>
        <li>
          <Link url="About">About</Link>
        </li>
        <li class="ms-5">
          <button class="btn rounded-pill px-3" :class="button">Log in</button>
        </li>
      </ul>
    </ul>
  </nav>
</template>
<style>
.nav {
  background-image: linear-gradient(180deg, #54009941 -90%, #540099 140%);
  border-radius: 0 0 30px 30px;
}

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
