<template>
  <LazyHydrate when-visible>

    <main class="short-bg">

      <Header hero="Contact"/>
      <section class="block-contact">

        <div class="container">
          <div class="content">
            <iframe src="https://discord.com/widget?id=929463973387075676&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
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
      title: 'Contact',
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