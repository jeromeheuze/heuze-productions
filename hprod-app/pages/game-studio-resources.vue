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
                  <h2>Heuze Production Roadmap</h2>
                  <p>Follow our development of games, websites, and metaverses.</p>
                  <a href="https://trello.com/b/tcwDq4Nt/heuze-production-roadmap" rel="noopener" target="_blank" class="button-narrow">Visit our Roadmap</a>
                </div>
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
                  <h2>GameFromScratch.com</h2>
                  <p>Game Development News, Tutorials and More.</p>
                  <a href="https://gamefromscratch.com" rel="noopener" target="_blank" class="button-narrow">Visit GameFromScratch</a>
                </div>
                <div class="slots">
                  <h2>Game Design Document Outline</h2>
                  <p>A game design document is the blueprint from which a game is to be built. As such, every single detail necessary to build the game should be addressed.</p>
                  <a href="/DesignDocTemplate.pdf" target="_blank" class="button-narrow">Download PDF</a><br>
                  <a href="https://www.cs.unc.edu/Courses/comp585-s15/DesignDocTemplate.pdf" rel="noopener" target="_blank" class="button-narrow">Source PDF</a>
                </div>
                <div class="slots">
                  <h2>Defold - Game Engine</h2>
                  <p>The ultimate game engine for web and mobile.</p>
                  <a href="https://defold.com" rel="noopener" target="_blank" class="button-narrow">Visit Defold</a>
                </div>
                <div class="slots">
                  <h2>Rive App</h2>
                  <p>Build interactive animations that run anywhere.</p>
                  <a href="https://www.rive.app" rel="noopener" target="_blank" class="button-narrow">Visit Rive</a>
                </div>
                <div class="slots">
                  <h2>GDevelop - Game Engine</h2>
                  <p>Make games with GDevelop, a no-code, open-source, free, and easy game-making app.</p>
                  <a href="https://gdevelop.io" rel="noopener" target="_blank" class="button-narrow">Visit GDevelop</a>
                </div>
                <div class="slots">
                  <h2>Patreons - I follow</h2>
                  <a href="https://www.patreon.com/Gamerturk/" rel="noopener" target="_blank" class="button-narrow">Gamerturk - Creating Game/Anime News, Reviews and Playthroughs</a>
                  <a href="https://www.patreon.com/paceeeey/" rel="noopener" target="_blank" class="button-narrow">Pacey - Creating Earth 2 Videos</a>
                  <a href="https://www.patreon.com/defold/" rel="noopener" target="_blank" class="button-narrow">Defold - Creating the ultimate game engine for web and mobile</a>
                  <a href="https://www.patreon.com/gamefromscratch/" rel="noopener" target="_blank" class="button-narrow">GameFromScratch - Creating Video game tutorials</a>
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