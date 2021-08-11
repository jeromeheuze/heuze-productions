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
    <title>Casino Properties | Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/casino-properties/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/casino-properties/" />
    <meta property="og:site_name" content="Heuze Productions - virtual business in Earth2.io" />
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

<header class="header-cont bootstrap-wrapper" id="top">
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 branding"><a href="/"><h1>Heuze Productions</h1></a></div>
                <div class="col-8 col-md-6 menu">
                    <ul>
                        <li><a href="/">All Properties</a></li>
                        <li><a href="https://discord.gg/d3hewUZBHW" rel="noopener" target="_blank" title="Connect with me on Discord">Discuss on Discord</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="banner full pic format-<?=$fileTypeCss;?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1 class="line1">Earth2 & AfterEarth virtual Casinos</h1>
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
                                <h5 class="card-title">🌺 Hibiscus - Mega Casino Resort / Shopping / Living</h5>
                                <p class="card-text">Land Class: 2 - 355 tiles - Belize</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ee64ae8a-4654-408c-8424-62cae0ab7ffc" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🏵️ Rosette - Mega Casino Resort / Shopping / Living</h5>
                                <p class="card-text">Land Class: 2 - 415 tiles - Belize</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/d62015be-c62c-48fa-b212-ed4d7a4f8c43" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🌸 Sakura Casino - Downtown Casino Resort - Play / Dine / Dance</h5>
                                <p class="card-text">Land Class: 2 - 28 tiles - Belize</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/7942df21-be9b-44c2-bf62-68db319d8f6a" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🐙 Octopus Restaurant & Casino - Under-The-Sea Suite</h5>
                                <p class="card-text">Land Class: 2 - 60 tiles - Belize</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/7942df21-be9b-44c2-bf62-68db319d8f6a" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">✨ The Obsidian Nebula Casino - Mega Casino Resort / Shopping / Living</h5>
                                <p class="card-text">Land Class: 2 - 750 tiles - Belize</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/a3caca51-d0e7-4ee5-87e1-697217e38315" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-casino-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💎💎💎 Triple Diamond Casino Resort - CMC</h5>
                                <p class="card-text">Land Class: 2 - 304 tiles - Belize</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/5df31f5b-f875-4d8e-b2c4-d86520c2cb18" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/adb77e01-b2ed-4ec7-8372-9f6b6796ec90" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/67456f75-76d5-4b22-8d18-64634f38be9f" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/9267e50e-ff0f-4393-b204-4c198cf4add4" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/e65b8204-c699-4576-b3de-8012c956659b" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/45b237de-e431-49a7-82ea-6d89a12e66ff" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/22ee27b5-7c2b-4900-bf6d-3a5ce1d70b6b" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/003d80c3-0e69-437b-b1d0-409ee06249b5" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/805d941d-10be-454c-86bc-5536f2c94e2f" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/504f9d95-12b7-4860-b6cd-7feb82490750" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/3f20922a-b64a-4935-804b-f525e607f2c9" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/fbe78ab9-076f-4311-8b3c-9847c89df04d" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/1a0bd6f8-a633-46aa-a649-1cdf92897b82" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/23e9bdc6-4a32-4313-ab5e-5409f437bd44" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/01f326f4-22b6-45dd-ba9b-5b5c039e7d02" class="btn btn-block btn-primary" target="_blank">View Property</a>
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
                                    <a href="https://afterearth.io/explore/4375db9d-ddf8-4e68-9f68-db2d2b553060" class="btn btn-block btn-primary" target="_blank">View Property</a>
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