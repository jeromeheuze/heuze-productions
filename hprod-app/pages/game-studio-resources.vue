<template>
  <LazyHydrate when-visible>

    <main class="short-bg">

      <Header hero="Game Studio Resources"/>
      <section class="block-contact">

        <div class="container">
          <div class="content">
            <h2>Video Game Press Kit Generator - Fee Presskit</h2>
            <p>Fee Presskit - a super smart tool for producing a tailored video game press kit.</p>
            <a href="https://feepresskit.com/#/" target="_blank" class="button-narrow">Visit Fee Presskit</a>
          </div>
        </div>

      </section>
      <Footer/>

    </main>

  </LazyHydrate>
</template>

<script>
import Header from "~/components/header";
import Footer from "~/components/footer";
import HomePageGrid from "@/components/home-page-grid";
import HomeQuality from "@/components/quality";
import LazyHydrate from 'vue-lazy-hydration';
export default {
  props: ['error'],
  layout: 'error',
  head () {
    return {
      bodyAttrs: {
        class: 'v1'
      },
      title: 'Game Studio Resources',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: 'Heuze Productions is an indie game developer using Unity3D. We are making 2D casual games. Follow our journey making several games for mobile and the metaverse.'
        }
      ],
      style: [
      ],
      script: [
      ]
    }
  },
  modules: [],
  components: {LazyHydrate, Footer, Header, HomePageGrid, HomeQuality}
}
</script>