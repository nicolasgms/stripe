<template>
  <v-app>
    <Header/>
    <v-main>
      <!-- Hero Section -->
      <hero-component/>
      <!-- About us -->
      <Aboutus/>
      <!-- Portfolio -->
      <portfolio/>
      <!-- Project -->
      <!-- <project/> -->
      <!-- Gallery -->
      <!-- <gallery/> -->
      <!-- Contact -->
      <contactus/>
      <!-- Footer -->
      <Footer/>
    </v-main>
  </v-app>
</template>

<script>

import Header from '@/components/Header';
import HeroComponent from './components/HeroComponent.vue';
import Aboutus from './components/Aboutus.vue';
import Portfolio from './components/Portfolio.vue';
// import Project from './components/Project.vue';
// import Gallery from './components/Gallery.vue';
import Contactus from './components/Contactus.vue';
import Footer from './components/Footer.vue';
export default {
  name: 'App',
  components: {HeroComponent, Header, Aboutus, Portfolio, 
  // Project, Gallery,
   Contactus, Footer },
}
</script>

<style scoped>

</style>