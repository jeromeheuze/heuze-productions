<template>
  <LazyHydrate when-visible>

    <main>
      <Header/>
      <div class="wrapper">
        <h1 v-if="error.statusCode === 404" style="text-align: center;">Page not found</h1>
        <h1 v-else>An error occurred</h1>
        <p>All Earth2 pages have moved to <a href="https://e2production.com" style="color:fuchsia">E2Production.com</a></p>
        <p>Visit my other websites I made and maintain.</p>
        <div class="icons">
          <a href="https://jeromeheuze.com"><i class="fa fa-link"></i></a>
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
  props: ['error'],
  layout: 'error',
  head () {
    return {
      bodyAttrs: {
        class: 'v1'
      },
      title: 'Page Not Found',
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