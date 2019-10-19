<?php
include "./../includes/global.php";
$fileType = "nowebp";
if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
    // webp is supported!
    $fileType = "webp";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Heuze Productions</title>
    <?php include "./../includes/head.php"; ?>
    <link href="/css/obsidian.css" rel="stylesheet">
</head>
<body>

<header class="header-cont bootstrap-wrapper" id="top">
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 branding"><a href="/"><h1>Heuze Productions</h1></a></div>
                <div class="col-8 col-md-6 menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="https://discord.gg/Vf2Brvq" rel="noopener" target="_blank" title="Connect with me on Discord">Discuss on Discord</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="banner full pic format-<?=$fileType;?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1 class="line1">Wolf Pack App <a href="/portfolio/wolf-site/" title="Live Wolf Pack App website" target="_blank"><img src="../img/icons8-external-link-26-white.png" width="26" height="26" alt="External Link"/></a></h1>
                <p class="line2"><span>Wolf App</span> is a made up project to demonstrate a responsive website using a grid with flex. I also use webp images, SASS with gulp, Google Lighthouse optimized.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="contact-box">
                    <h2>Milestones reached:</h2>
                    <ul>
                        <li>Responsive website</li>
                        <li>Lighthouse optimized</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<main>

    <div class="block-mocks">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h2>Desktop</h2>
                        <div class="img_holder desktop">
                            <a href="/img/portfolio/hprod-wolf-app-desktop.png" target="_blank" title="View desktop">
                                <div class="inner_viewer"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h2>Tablet</h2>
                        <div class="img_holder tablet">
                            <a href="/img/portfolio/hprod-wolf-app-ipad.png" target="_blank" title="View tablet">
                                <div class="inner_viewer"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h2>Mobile</h2>
                        <div class="img_holder phone">
                            <a href="/img/portfolio/hprod-wolf-app-iphone.png" target="_blank" title="View phone">
                                <div class="inner_viewer"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-tools">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-6 text-side"><p>Some Tools I use while working on Wolf Pack App website:</p></div>
                    <div class="col-12 col-md-6 icon-side">
                        <ul>
                            <li><a href="https://www.w3.org/html/" rel="noopener" target="_blank">
                                    <img src="/img/iconfinder_HTML_Badge_65686.png" width="32" height="32" alt="HTML5" title="HTML5">
                                </a></li>
                            <li><a href="https://www.w3.org/Style/CSS/current-work.en.html" rel="noopener" target="_blank"><img src="/img/iconfinder_css3_294692.png" width="32" height="32" alt="CSS3" title="CSS3" /></a></li>
                            <li><a href="https://sass-lang.com/" rel="noopener" target="_blank"><img src="/img/iconfinder_288_Sass_4518841.png" width="32" height="32" alt="SASS" title="SASS" /></a></li>
                            <li><a href="https://gulpjs.com/" rel="noopener" target="_blank"><img src="/img/iconfinder_gulp_4691255.png" width="32" height="32" alt="GULP" title="GULP" /></a></li>
                            <li><a href="https://web.dev" rel="noopener" target="_blank"><img src="/img/webdev_icon.png" width="32" height="32" alt="web.dev icon" title="Google web.dev" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-under-hood">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12">
                        <h2>Purpose</h2>
                        <p>I made Wolf Pack App website to demonstrate how I would tackle a responsive design. I got inspired by a design on Dribble - the same way a UX/UI designer would give me a series of mocks to complete.</p>
                        <h2>Stack</h2>
                        <p>I have developed Wolf Pack App website with a simple stack using PHP, HTML5, CSS3, SASS and using Gulp to compile the styles. I am also using a google web font called - IBM Plex Sans with the following font weight 100, 400, 700. I decided to use a very simple Flex grid framework called FlexBoxGrid (<a href="http://flexboxgrid.com/">http://flexboxgrid.com/</a>).</p>
                    </div>
                </div>
            </div>
            <div class="block-cont">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <h2>Optimization</h2>
                        <p>For making sure the site is optimized for mobile and so on - I used Google Lighthouse site checker. As you can see I made the site with 96/100 for performance, 97/100 for accessibility, 100 for best practices in coding and 100 for SEO. I also have a download time of 2.24 seconds when first visited and 0.54 seconds when everything is cached by the web browser.</p>
                        <p>This is great results for all the images I have added to the homepage. I should be able to crunch the images even more and since I am using WebP format it is lossless. Overall it took me about 3 days to achieve that result.</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <img src="/img/portfolio/hprod-wolf-app-ligthhouse.png" class="img_responsive" alt="Lighthouse test of Wolf Pack App" />
                    </div>
                </div>
            </div>
            <div class="block-cont">
                <div class="row">
                    <div class="col-12">
                        <h2>Under the Hood</h2>
                        <img src="/img/portfolio/hprod-wolf-app-under-hood.jpg" class="img_responsive" alt="Under the hood of Wolf Pack App" />
                    </div>
                </div>
            </div>
            <div class="block-cont tutorials">
                <div class="row">
                    <div class="col-12">
                        <h3>How did you do the WebP logic for graphics ?</h3>
                        <p>To solve the issue of downloading too many images when using a &lt;picture&gt; tag I used a logic that starts in PHP first querying the web browser if it accepts webp image format. That should cover a good portion of the web browsers out there.</p>
                    </div>
                    <div class="col-12">
                        <pre>
                            <code data-language="php">
&lt;?php
$fileType = "jpg";
if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
    // webp is supported!
    $fileType = "webp";
}
?&gt;
                            </code>
                        </pre>
                    </div>

                    <div class="col-12">
                        <pre>
                            <code data-language="php">
&lt;div class="col-xs-12 col-sm-6 no-padding grid2x2"&gt;
    &lt;div class="quad imgm1 format-&lt;?=$fileType;?&gt;"&gt;&lt;/div&gt;
    &lt;div class="quad imgm2 format-&lt;?=$fileType;?&gt;"&gt;&lt;/div&gt;
    &lt;div class="quad imgm3 format-&lt;?=$fileType;?&gt;"&gt;&lt;/div&gt;
    &lt;div class="quad imgm4 format-&lt;?=$fileType;?&gt;"&gt;&lt;/div&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                    </div>

                    <div class="col-12">
                        <pre>
                            <code data-language="css">
.phone {
    height: 19em;
    width: 100%;
    &.format-jpg {
      background: url("../img/iphone_iphonexspacegrey_portrait.png") center center no-repeat;
      background-size: contain;
    }
    &.format-webp {
      background: url("../img/iphone_iphonexspacegrey_portrait.webp") center center no-repeat;
      background-size: contain;
    }
}
                            </code>
                        </pre>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>How did you style the line in the footer ?</h3>
                        <p>The footer was interesting - even if this is the least seen element of a website site. It sits on the bottom of the page and provide complementary information for the curious visitors. The 3 columns layout is common and that gradient line is actually all done in CSS3. I used an HTML5 hr tag.</p>
                        <img src="/img/portfolio/footer.jpg" class="img_responsive" alt="Wolf Pack App footer" />
                    </div>

                    <div class="col-12">
                        <pre>
                            <code data-language="css">
hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));
    margin: 5em 0 5em 0;
}
                            </code>
                        </pre>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>How did you manage the 2x2 grid photo ?</h3>
                        <p>I was looking at the layout I wanted and a regular grid from the framework I used did not suffice. So I created a custom flex system to display 2x2 images grid for large screens, 1x3 images grid for tablets and 3x1 images grid for phones. Let's look at the media queries first.</p>
                    </div>

                    <div class="col-12">
                        <pre>
                            <code data-language="css">
// Very Small smartphones (Portrait view)
$screen-xs-min: 320px;

// Small tablets and large smartphones (landscape view)
$screen-sm-min: 576px;

// Small tablets (portrait view)
$screen-md-min: 768px;

// Tablets and small desktops
$screen-lg-min: 992px;

// Large tablets and desktops
$screen-xl-min: 1024px;
                            </code>
                        </pre>
                    </div>

                    <div class="col-12">
                        <pre>
                            <code data-language="css">
.grid2x2 {
    min-height: 100%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    > div {
      display: flex;
      flex-basis: calc(50% - 40px);
      justify-content: center;
      flex-direction: column;
    }
    > div > div {
      display: flex;
      justify-content: center;
      flex-direction: row;
    }
    .quad {
      min-height: 13em;
      min-width: 100%;
      @media (min-width: #{$screen-xs-min}) {
        min-height: 13em;
        min-width: 0;
        max-width: 33.33333%;
      }
      @media (min-width: #{$screen-sm-min}) {
        min-height: 13em;
        min-width: 0;
        max-width: 33.33333%;
      }
      @media (min-width: #{$screen-md-min}) {
        min-height: 13em;
        min-width: 100%;
      }
      @media (min-width: #{$screen-lg-min}) {
        min-height: 13em;
        min-width: 100%;
      }
      @media (min-width: #{$screen-xl-min}) {
        min-height: 20em;
        min-width: 50%;
      }
      &.imgm1 {
        &.format-jpg {
          background: url("../img/marek-szturc-8Ou3EZmTMWA-unsplash.jpg") center center no-repeat;
          background-size: cover;
        }
        &.format-webp {
          background: url("../img/marek-szturc-8Ou3EZmTMWA-unsplash.webp") center center no-repeat;
          background-size: cover;
        }
      }
      &.imgm2 {
        display: none;
        @media (min-width: #{$screen-xs-min}) {
          display: none;
        }
        @media (min-width: #{$screen-sm-min}) {
          display: none;
        }
        @media (min-width: #{$screen-md-min}) {
          display: none;
        }
        @media (min-width: #{$screen-lg-min}) {
          display: block;
        }
        @media (min-width: #{$screen-xl-min}) {
          display: block;
        }
        &.format-jpg {
          background: url("../img/hybrid-HtHrjExpddA-unsplash.jpg") center center no-repeat;
          background-size: cover;
        }
        &.format-webp {
          background: url("../img/hybrid-HtHrjExpddA-unsplash.webp") center center no-repeat;
          background-size: cover;
        }
      }
      &.imgm3 {
        &.format-jpg {
          background: url("../img/simon-rae-jY_2XG-6HU0-unsplash.jpg") center center no-repeat;
          background-size: cover;
        }
        &.format-webp {
          background: url("../img/simon-rae-jY_2XG-6HU0-unsplash.webp") center center no-repeat;
          background-size: cover;
        }
      }
      &.imgm4 {
        &.format-jpg {
          background: url("../img/aron-visuals-4zxSWESyZio-unsplash.jpg") center center no-repeat;
          background-size: cover;
        }
        &.format-webp {
          background: url("../img/aron-visuals-4zxSWESyZio-unsplash.webp") center center no-repeat;
          background-size: cover;
        }
      }
    }
  }
                            </code>
                        </pre>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include "./../includes/footer.php"; ?>

</main>
<?php include "./../includes/scripts.php"; ?>
<script type="text/javascript" src="/js/rainbow-custom.min.js"></script>
</body>
</html>