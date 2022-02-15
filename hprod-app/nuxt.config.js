import axios from 'axios'
import getRoutes from "./utils/getRoutes";
export default {
    // Target: https://go.nuxtjs.dev/config-target
    target: 'static',

    // Global page headers: https://go.nuxtjs.dev/config-head
    head: {
        title: 'Home',
        htmlAttrs: {
            lang: 'en'
        },
        titleTemplate: '%s | Heuze Productions',
        meta: [
            { charset: 'utf-8' },
            { 'http-equiv': 'X-UA-Compatible', content:'IE=edge' },
            { name: 'google-site-verification', content: 'ffqOWgEXhG-idphNd4krhLAEAIlAnS1nUEq-yWPTjvI' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { hid: 'description', name: 'description', content: 'Heuze Productions is an indie game developer using Unity3D. We are making 2D casual games. Follow our journey making several games for mobile and the metaverse.' },
            // Twitter
            {
                hid: 'twitter:card',
                name: 'twitter:card',
                content: 'summary_large_image'
            },
            {
                hid: 'twitter:url',
                name: 'twitter:url',
                content: 'https://heuzeproductions.com/'
            },
            {
                hid: 'twitter:title',
                name: 'twitter:title',
                content: 'Heuze Productions'
            },
            {
                hid: 'twitter:description',
                name: 'twitter:description',
                content: 'Heuze Productions is an indie game developer using Unity3D. We are making 2D casual games. Follow our journey making several games for mobile and the metaverse.'
            },
            {
                hid: 'twitter:image',
                name: 'twitter:image',
                content: 'https://heuzeproductions.com/heuzeproductions-social-banner.jpg'
            },
            // Open Graph
            { hid: 'og:site_name', property: 'og:site_name', content: 'Heuze Productions' },
            { hid: 'og:type', property: 'og:type', content: 'website' },
            {
                hid: 'og:url',
                property: 'og:url',
                content: 'https://heuzeproductions.com/'
            },
            {
                hid: 'og:title',
                property: 'og:title',
                content: 'Heuze Productions'
            },
            {
                hid: 'og:description',
                property: 'og:description',
                content: 'Heuze Productions is an indie game developer using Unity3D. We are making 2D casual games. Follow our journey making several games for mobile and the metaverse.'
            },
            {
                hid: 'og:image',
                property: 'og:image',
                content: 'https://heuzeproductions.com/heuzeproductions-social-banner.jpg'
            },
            {
                hid: 'og:image:secure_url',
                property: 'og:image:secure_url',
                content: 'https://heuzeproductions.com/heuzeproductions-social-banner.jpg'
            },
            {
                hid: 'og:image:alt',
                property: 'og:image:alt',
                content: 'Heuze Productions'
            },
            { name: 'msapplication-TileColor', content: '#ffffff' },
            { name: 'msapplication-TileImage', content: '/ms-icon-144x144.png' },
            { name: 'theme-color', content: '#ffffff' }
        ],
        link: [
            { rel: 'apple-touch-icon', sizes: '57x57', href: 'https://heuzeproductions.com/apple-icon-57x57.png' },
            { rel: 'apple-touch-icon', sizes: '60x60', href: 'https://heuzeproductions.com/apple-icon-60x60.png' },
            { rel: 'apple-touch-icon', sizes: '72x72', href: 'https://heuzeproductions.com/apple-icon-72x72.png' },
            { rel: 'apple-touch-icon', sizes: '76x76', href: 'https://heuzeproductions.com/apple-icon-76x76.png' },
            { rel: 'apple-touch-icon', sizes: '114x114', href: 'https://heuzeproductions.com/apple-icon-114x114.png' },
            { rel: 'apple-touch-icon', sizes: '120x120', href: 'https://heuzeproductions.com/apple-icon-120x120.png' },
            { rel: 'apple-touch-icon', sizes: '144x144', href: 'https://heuzeproductions.com/apple-icon-144x144.png' },
            { rel: 'apple-touch-icon', sizes: '152x152', href: 'https://heuzeproductions.com/apple-icon-152x152.png' },
            { rel: 'apple-touch-icon', sizes: '180x180', href: 'https://heuzeproductions.com/apple-icon-180x180.png' },
            { rel: 'icon', type: 'image/png', sizes: '192x192', href: 'https://heuzeproductions.com/android-icon-192x192.png' },
            { rel: 'icon', type: 'image/png', sizes: '96x96', href: 'https://heuzeproductions.com/favicon-16x16.png' },
            { rel: 'icon', type: 'image/png', sizes: '32x32', href: 'https://heuzeproductions.com/favicon-32x32.png' },
            { rel: 'icon', type: 'image/png', sizes: '16x16', href: 'https://heuzeproductions.com/favicon-16x16.png' },
            { rel: 'manifest', href: 'https://heuzeproductions.com/manifest.json' },
            { rel: 'preconnect', href: 'https://cdn.jsdelivr.net' },
            { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
            { rel: 'stylesheet', href: 'https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css' }
            ]
    },
    script: [

    ],
    // Global CSS: https://go.nuxtjs.dev/config-css
    css: [
        '@/assets/styles/main.scss'
    ],

    // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
    plugins: [
        { src: '~/plugins/gtag', mode: "client" }
    ],

    // Auto import components: https://go.nuxtjs.dev/config-components
    components: true,

    // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
    buildModules: [
        'nuxt-purgecss',
        ['@fullhuman/postcss-purgecss', {
            content: ['./pages/**/*.vue', './components/**/*.vue'], safelist: ['html', 'body']}
        ]
    ],

    // Modules: https://go.nuxtjs.dev/config-modules
    modules: [
        '@nuxtjs/sitemap',
        '@nuxtjs/robots',
        '@nuxtjs/axios',
        '@nuxtjs/redirect-module',
        [
            'nuxt-social-meta',
            {
                site_name: "HeuzeProductions",
                author: "Jerome Heuze",
                img: "https://heuzeproductions.com/heuzeproductions-social-banner.jpg",
                img_size: { width: "1200", height: "630" },
                locale: "en_US",
                twitter: "@E2Prod",
                twitter_card: "summary",
                theme_color: "#0d171e",
            },
        ],
        '@nuxt/content',
        ['nuxt-canonical', { baseUrl: 'https://heuzeproductions.com',trailingSlashes: true,forceLowercase: true }]
    ],
    //robots.txt
    robots: {
        Sitemap: 'https://heuzeproductions.com/sitemap.xml',
        UserAgent: '*',
        Allow: '/'
    },
    //content
    content: {
        fullTextSearchFields: ['title', 'description', 'slug'],
        liveEdit: false
    },
    loading: {
        color: '#e9128a',
        height: '5px',
        continuous: true,
        duration: 3000
    },
    hooks: {
    },
    //Sitemap config
    sitemap: {
        hostname: 'https://heuzeproductions.com',
        defaults: {
            changefreq: 'daily',
            priority: 1,
            lastmod: new Date()
        },
        routes() {
            return getRoutes();
        }
    },
    // Build Configuration: https://go.nuxtjs.dev/config-build
    build: {
        cssSourceMap: true,
        extractCSS: true,
        analyze: false
    },
    generate: {
        fallback: true
    },
    redirect: [
        { from: '^metaverse', to: 'https://e2production.com/', statusCode: 301 },
        { from: '^what-is-earth2', to: 'https://e2production.com/', statusCode: 301 },
        { from: '^gallery', to: 'https://e2production.com/research-gallery', statusCode: 301 },
        { from: '^products', to: 'https://e2production.com/products', statusCode: 301 },
        { from: '^casino-properties', to: 'https://e2production.com/', statusCode: 301 },
        { from: '^resource-districts-properties', to: 'https://e2production.com/', statusCode: 301 },
        { from: '^mega-city-properties', to: 'https://e2production.com/', statusCode: 301 },
        { from: '^mega-city-pili-pala', to: 'https://e2production.com/', statusCode: 301 },
        { from: '^earth2-jewels-simulator', to: 'https://e2production.com/earth2-jewels-simulator', statusCode: 301 }
    ]
}