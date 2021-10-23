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
    <title>Casino Properties | Heuze Productions - virtual business in Earth2.io and other Metaverse</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/casino-properties/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io and other Metaverse" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/casino-properties/" />
    <meta property="og:site_name" content="Heuze Productions - virtual business in Earth2.io and other Metaverse" />
    <meta property="og:image" content="https://heuzeproductions.com/img/hpe2-fb.jpg" />
    <meta property="og:image:secure_url" content="https://heuzeproductions.com/img/hpe2-fb.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <?php include "./../includes/head.php"; ?>
    <style>
        .card {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>

<?php include "./../includes/header.php"; ?>

<div class="banner full pic format-<?=$fileTypeCss;?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2 class="line1">Earth2 & AfterEarth virtual Casinos</h2>
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

    <div class="block-hi" id="About">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="hi-left">
                            <h2>Building & Managing several Casinos</h2>
                            <p>We have selected real casino location from AfterEarth and from E2 megacities where we will building and maintain virtual casinos. We will respect the original buildings to continue the same experience people have in Earth1. </p>
                            
                            <p>Visit my <a href="https://afterearth.io/profile/spectrum3900" target="_blank">AfterEarth Profile</a> and use my code to get a discount - <strong>spectrum3900</strong></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="hi-right">
                            <div class="hi-pic format-<?=$fileTypeCss;?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-services" id="Properties">
        <div class="container">
            <div class="block-cont">
                <div class="row">

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Earth2 Casino Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">CMC Casinos</h5>
                                <p class="card-text">Belize</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="/mega-city-cmc/" class="btn btn-block btn-primary">View Properties</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">AfterEarth Casino Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Stones Gambling Hall</h5>
                                <p class="card-text">Citrus Heights, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.spots.edges.covers" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Bear River Casino Resort</h5>
                                <p class="card-text">Loleta, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.heavy.juggernaut.bloomers" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Thunder Valley Casino Resort</h5>
                                <p class="card-text">Lincoln, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.sparrows.sugary.microscopic" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Graton Resort & Casino</h5>
                                <p class="card-text">Santa Rosa, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.person.blunt.year" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Twin Pine Casino & Hotel</h5>
                                <p class="card-text">Middletown, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/explore/a6fbebb4-1c34-47c9-9eac-d4af5db57ed4" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Valley View Casino and Hotel</h5>
                                <p class="card-text">Valley Center, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.disagrees.bakers.twig" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Red Hawk Casino</h5>
                                <p class="card-text">Placerville, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.jars.inactivity.converter" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Konocti Vista Casino and Resort</h5>
                                <p class="card-text">Lakeport, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.needlessly.crown.batted" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Blue Lake Casino & Hotel</h5>
                                <p class="card-text">Arcata, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.undertone.bookshop.bulldozers" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Robinson Rancheria Resort & Casino</h5>
                                <p class="card-text">Upper Lake, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.panicking.members.little" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Gold Country Casino Resort</h5>
                                <p class="card-text">Oroville, CA</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.pizza.pyramid.finding" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Harrah's Lake Tahoe</h5>
                                <p class="card-text">Stateline, NV</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.wash.encourage.independent" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Harvey's Lake Tahoe</h5>
                                <p class="card-text">Stateline, NV</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.huddle.eloquently.despite" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">MontBleu Resort Casino & Spa</h5>
                                <p class="card-text">Stateline, NV</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.fertile.tissue.selection" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Hard Rock Lake Tahoe</h5>
                                <p class="card-text">Stateline, NV</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.defect.amicably.skylights" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-ae-e2.jpg" class="card-img-top" alt="AE Property">
                            <div class="card-body">
                                <h5 class="card-title">Gold Dust West Hotel and Casino</h5>
                                <p class="card-text">Carson City, NV</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://afterearth.io/ae.carbon.bleak.files" class="btn btn-block btn-primary" target="_blank">View Property</a>
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