<template>
  <LazyHydrate when-visible>

    <main class="short-bg">

      <Header hero="Contact"/>
      <section class="block-contact">

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-lg-6">
              <div class="content">
                <h2>Team</h2>
                <h3>Jerome Heuze</h3>
                <h4>Indie game developer</h4>
                <p><a href="https://www.jeromeheuze.com/" target="_blank">About me.</a></p>
                <p><a href="https://www.behance.net/jerome-heuze" target="_blank">Behance - Portfolio</a></p>
                <p><a href="https://www.linkedin.com/in/jeromeheuze/" target="_blank">LinkedIn - Resume</a></p>
                <p><a href="https://github.com/jeromeheuze" target="_blank">Github</a></p>
              </div>
            </div>
            <div class="col-xs-12 col-lg-6">
              <div class="content">
                <iframe src="https://discord.com/widget?id=929463973387075676&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
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
      title: 'Contact',
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: 'Heuze Productions is an indie game development studio. We are making 2D casual video games and focus on storytelling. Follow our journey making games for mobile, desktop and the Metaverse.'
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