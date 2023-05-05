<template>
  <header>

    <nav>
      <div class="logo"><nuxt-link to="/">Heuze Productions</nuxt-link></div>
      <ul>
        <li><nuxt-link to="/game-studio-resources">Resources</nuxt-link></li>
        <li><nuxt-link to="/contact">Contact</nuxt-link></li>
      </ul>
    </nav>
    <HeroHome v-if="hero === 'home'"/>
    <HeroSub :title="hero" v-if="hero !== 'home'"/>
  </header>
</template>

<script>
import HeroHome from "@/components/hero-home";
import HeroSub from "@/components/hero-sub";
export default {
  props: ['hero']
}
</script>