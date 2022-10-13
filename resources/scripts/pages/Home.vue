<template>
  <div class="images">
    <img :src="HeroBg2" class="first" />
    <img :src="HeroBg" class="second" />
  </div>
  <section class="hero position-relative">
    <div class="d-flex justify-content-between">
      <img :src="HeroSection" />
      <form class="form col-3 d-flex flex-column gap-2 mt-5">
        <group>
          <label for="name" class="form-label mb-1">Name</label>
          <input type="text" name="name" class="form-control rounded-pill" id="name" />
        </group>
        <group>
          <label for="date" class="form-label mb-1">Date</label>
          <input type="date" name="date" class="form-control rounded-pill" id="date" />
        </group>
        <button class="btn btn-primary rounded-pill mt-3">Submit</button>
      </form>
    </div>
  </section>
  <section class="py-5"></section>
  <!-- why us -->
  <section class="d-flex flex-column">
    <heading>why us?</heading>
    <ul class="d-flex justify-content-center gap-5">
      <li class="col-3">
        <WhyUsCard :image="WhyUs1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis id ex aspernatur
        </WhyUsCard>
      </li>
      <li class="col-3">
        <WhyUsCard :image="WhyUs2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis id ex aspernatur
        </WhyUsCard>
      </li>
      <li class="col-3">
        <WhyUsCard :image="WhyUs3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis id ex aspernatur
        </WhyUsCard>
      </li>
    </ul>
  </section>

  <!-- our core services -->
  <section class="py-5"></section>
  <section class="d-flex flex-column">
    <heading>Our Core Services</heading>
    <h5 class="text-center mx-auto" style="min-width: 320px; max-width: 50%">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, itaque quod
      dignissimos accusamus pariatur nihil a maiores aliquam quasi iste obcaecati
    </h5>
    <ul>
      <li>first</li>
      <li>second</li>
      <li>third</li>
    </ul>
  </section>
</template>

<script>
import HeroSection from "../../images/hero-section.svg";
import HeroBg from "../../images/hero-bg.svg";
import HeroBg2 from "../../images/hero-bg-2.svg";
import Section2 from "../../images/section-2.svg";
import WhyUs1 from "../../images/why-us-1.svg";
import WhyUs2 from "../../images/why-us-2.svg";
import WhyUs3 from "../../images/why-us-3.svg";
import group from "../components/group.vue";
import heading from "../components/heading.vue";
import WhyUsCard from "../components/why-us-card.vue";
import OurCoreServiceCard from "../components/our-core-service-card.vue";
export default {
  components: { group, heading, WhyUsCard, OurCoreServiceCard },
  setup() {
    return {
      HeroSection,
      HeroBg,
      HeroBg2,
      Section2,
      WhyUs1,
      WhyUs2,
      WhyUs3,
    };
  },
};
</script>
<style>
group {
  display: flex;
  flex-direction: column;
  color: #fff;
}

.h {
  height: 4rem;
  width: 4rem;
}

.hero img {
  width: 500px;
  height: 400px;
}

.images {
  position: absolute;
  top: 0;
  right: 0;
}

.images img {
  height: auto;
  position: absolute;
  top: 0;
  right: 0;
  transform-origin: right;
  transform: scaleX(1.1);
}

.images > .first {
  width: 70vw;
  z-index: 1;
}

.images > .second {
  width: 60vw;
  z-index: 1;
}

.hero {
  z-index: 10;
}
</style>
