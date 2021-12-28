<template>
  <LazyHydrate when-visible>

    <main>
      <Header/>
      <div class="wrapper">
        <h1>HeuzeProductions is coming soon<span class="dot">.</span></h1>
        <p>HeuzeProductions is an indie game developer using Unity3D. We are making 2D pixel games with stories. Follow our journey making webgl, mobile and desktop games.</p>
        <p>Visit my other websites I make and maintain.</p>
        <div class="icons">
          <a href="https://jeromeheuze.com"><i class="fa fa-link"></i></a>
          <a href="https://e2production.com"><i class="fa fa-link"></i></a>
          <a href="https://kohibou.com/"><i class="fa fa-link"></i></a>
          <a href="https://www.behance.net/jerome-heuze"><i class="fa fa-link"></i></a>
        </div>
      </div>
      <Footer/>
    </main>

  </LazyHydrate>
</template>

<script>
import Header from "~/components/header";
import Footer from "~/components/footer";
import LazyHydrate from 'vue-lazy-hydration';
export default {
  head () {
    return {
      bodyAttrs: {
        class: 'v1'
      },
      title: 'Home',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: 'HeuzeProductions is an indie game developer using Unity3D. We are making 2D pixel games with stories. Follow our journey making webgl, mobile and desktop games.'
        }
      ],
      style: [
      ],
      script: [
      ]
    }
  },
  modules: [],
  components: {LazyHydrate, Footer, Header}
}
</script>