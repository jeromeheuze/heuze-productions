<template>
  <LazyHydrate when-visible>

    <main class="short-bg">

      <Header hero="Game Studio Resources"/>
      <section class="block-contact">

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-lg-6">
              <div class="content">
            <div class="slots">
              <h2>Video Game Press Kit Generator - Fee Presskit</h2>
              <p>Fee Presskit - a super smart tool for producing a tailored video game press kit.</p>
              <a href="https://feepresskit.com/#/" rel="noopener" target="_blank" class="button-narrow">Visit Fee Presskit</a>
            </div>
            <div class="slots">
              <h2>GameDev Market</h2>
              <p>GameDev Market is a marketplace for high quality, affordable game assets handcrafted by talented creators around the world.</p>
              <a href="https://www.gamedevmarket.net/?ally=FGYDFYAt" rel="noopener" target="_blank" class="button-narrow">Visit GameDev Market</a>
            </div>
            <div class="slots">
              <h2>Game Design Document Outline</h2>
              <p>A game design document is the blueprint from which a game is to be built. As such, every single detail necessary to build the game should be addressed.</p>
              <a href="/DesignDocTemplate.pdf" target="_blank" class="button-narrow">Download PDF</a><br>
              <a href="https://www.cs.unc.edu/Courses/comp585-s15/DesignDocTemplate.pdf" rel="noopener" target="_blank" class="button-narrow">Source PDF</a>
            </div>
          </div>
            </div>
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