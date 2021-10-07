<?php
include "./../includes/global.php";
$fileTypeCss = "nowebp";
$fileTypeJpg = "jpg";
$fileTypePng = "png";
if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
    // webp is supported!
    $fileTypeCss = $fileTypeJpg = $fileTypePng = "webp";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>What is Earth2 | Heuze Productions - virtual business in Earth2.io and other Metaverse</title>
    <meta name="Description" content="What do we know about Earth2 so far - here are all the resources we have been provided by the official game developers.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/what-is-earth2/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="What is Earth2 | Heuze Productions - virtual business in Earth2.io and other Metaverse" />
    <meta property="og:description" content="What do we know about Earth2 so far - here are all the resources we have been provided by the official game developers." />
    <meta property="og:url" content="https://heuzeproductions.com/what-is-earth2/" />
    <meta property="og:site_name" content="What is Earth2 | Heuze Productions - virtual business in Earth2.io and other Metaverse" />
    <meta property="og:image" content="https://heuzeproductions.com/img/hpe2-fb.jpg" />
    <meta property="og:image:secure_url" content="https://heuzeproductions.com/img/hpe2-fb.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <?php include "./../includes/head.php"; ?>
    <style>
        .card {
            margin-bottom: 2rem;
        }
        .video-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; }
        .img-container { position: relative; }
        .img-container img { max-width: 100%; }
        .video-container iframe, .video-container object, .video-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style>
</head>
<body>

<?php include "./../includes/header.php"; ?>

<div class="banner full pic format-<?=$fileTypeCss;?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1 class="line1">What is Earth2?</h1>
            </div>
            <div class="col-12 col-md-4">
                <div class="contact-box">
                    <h2>Let's Discuss on Discord</h2>
                    <ul>
                        <li><a href="https://discord.gg/Vf2Brvq" rel="noopener" target="_blank"><img src="/img/icons8-discord-50.<?=$fileTypePng;?>" width="50" height="50" alt="" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<main>

    <div class="block-services" id="Properties">
        <div class="container">
            <div class="block-cont">
                <div class="row">

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Everything we know so far about Earth2</h2></div>
                    <div class="col-xs-12">

                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-04-03 00:00">June 07, 2021 - Physics video test driving</time></h3>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/x7jajjAznSw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-06-06 00:00">June 06, 2021 - E2 new video screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-06-06-2021.jpg" alt="June 03, 2021 - E2 new video screenshot">
                                </div>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-06-06b-2021.jpg" alt="June 03, 2021 - E2 new video screenshot">
                                </div>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-06-06c-2021.jpg" alt="June 03, 2021 - E2 new video screenshot">
                                </div>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-06-06d-2021.jpg" alt="June 03, 2021 - E2 new video screenshot">
                                </div>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-06-06e-2021.jpg" alt="June 03, 2021 - E2 new video screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-06-03 00:00">June 03, 2021 - E2 EV buggy screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-06-03-2021.jpg" alt="June 03, 2021 - E2 EV buggy screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-05-29 00:00">May 29, 2021 - E2 roads painted screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-05-29-2021.jpg" alt="May 29, 2021 - E2 roads painted screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-05-06 00:00">May 06, 2021 - E2 Custom flags screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-05-06-2021.jpg" alt="May 06, 2021 - E2 Custom flags screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-05-05 00:00">May 05, 2021 - E2 withdraw MC screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-05-05-2021.jpg" alt="May 05, 2021 - E2 withdraw MC screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-04-03 00:00">Apr 03, 2021 - E2 Easter Hunt launch screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-04-03-2021.jpg" alt="Apr 03, 2021 - E2 Easter Hunt launch screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-04-03 00:00">Apr 03, 2021 - Easter Egg Hunt 2021 - Earth 2</time></h3>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/6q85xedEeps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-03-20 00:00">Mar 20, 2021 - E2 Activity Map screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-03-20-2021.jpg" alt="Mar 20, 2021 - E2 Activity Map screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-03-12 00:00">Mar 12, 2021 - E2 Jeep in Dubai screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-03-12-2021.jpg" alt="Mar 12, 2021 - E2 Jeep in Dubai screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-03-05 00:00">Mar 05, 2021 - E2 Eggs Hunt screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-03-05-2021.jpg" alt="Mar 05, 2021 - E2 Eggs Hunt screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-03-02 00:00">Mar 02, 2021 - E2 In-Game screenshot</time></h3>
                                <div class="img-container">
                                    <img src="/img/we2/e2-sc-03-02-2021.jpg" alt="Mar 02, 2021 - E2 In-Game screenshot">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-02-17 00:00">Feb 17, 2021 - Earth 2 - DEV Stream 1.1 (Terrain Video LIVE)</time></h3>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/pmx161RADWw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2021-02-16 00:00">Feb 16, 2021 - Earth 2 Engine Terrain System in 4K (Official)</time></h3>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/n6Q07TXpjo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2020-12-30 00:00">Dec 30, 2020 - Earth2 DEV Stream</time></h3>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-951LpdmAqw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 3rem 0;">
                            <div class="col-xs-12 col-sm-1"><img src="/img/we2/e2-logo.jpg" alt="E2 Logo" width="88" height="88"></div>
                            <div class="col-xs-12 col-sm-11">
                                <h3 style="margin: 0 0 3rem 0;"><time datetime="2020-10-26 00:00">Oct 26, 2020 - Earth 2 Inception - 2020</time></h3>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/fa4hHBP-kOw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./../includes/footer.php"; ?>

</main>
<?php include "./../includes/scripts.php"; ?>
<script type="text/javascript">
</script>
</body>
</html>