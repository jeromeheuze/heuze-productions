<template>
  <LazyHydrate when-visible>

    <main class="long-bg">

      <Header hero="home"/>
      <HomePageGrid/>
      <HomeQuality/>
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
      title: 'Home',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: 'Heuze Productions is an indie game developer using Unity3D and Construct2. We are making 2D casual games. Follow our journey making several games for mobile, webgl and the metaverse.'
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