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
    <title>Mega City Properties | Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/mega-city-properties/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/mega-city-properties/" />
    <meta property="og:site_name" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:image" content="https://heuzeproductions.com/img/sandeep-swarnkar-dm7M67VaEBc-unsplash-darker.jpg" />
    <meta property="og:image:secure_url" content="https://heuzeproductions.com/img/sandeep-swarnkar-dm7M67VaEBc-unsplash-darker.jpg" />
    <meta property="og:image:width" content="798" />
    <meta property="og:image:height" content="532" />
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
                <h1 class="line1">Mega Cities</h1>
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
                            <h2>Embassies and presence</h2>
                            <p>Heuze Productions has bought many plots of land in the most popular megacities on Earth2.</p>
                            <p>Visit my <a href="https://app.earth2.io/#profile/85c750d8-93f6-4e71-bc53-1b7a509d7a75" target="_blank">E2 Profile</a> and use my code to get 5% off - <strong>DNGFDKD2UX</strong></p>
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Mega City Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/4c3d22f9-c234-4f48-80fe-32b096219022.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🈳 Floating Hotel & Mall</h5>
                                <p class="card-text">Land Class: 2 - 33 tiles - MANDO STAR Ship</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/4c3d22f9-c234-4f48-80fe-32b096219022" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/c448fcb2-5147-415f-b714-e6535fab34c9.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🦚 Wild Birds Reserve</h5>
                                <p class="card-text">Land Class: 2 - 75 tiles - Kiribati City</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/c448fcb2-5147-415f-b714-e6535fab34c9" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/d2c2a0af-653a-49d9-baf3-bd6083719628.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⛴ Premium Apts & Shops</h5>
                                <p class="card-text">Land Class: 2 - 150 tiles - Kiribati City</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/d2c2a0af-653a-49d9-baf3-bd6083719628" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/7d7fc0a6-695a-4ca4-817d-c07778f08f24.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🔊 Music Store</h5>
                                <p class="card-text">Land Class: 2 - 48 tiles - Club2</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/7d7fc0a6-695a-4ca4-817d-c07778f08f24" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/8e998e7a-0636-4a57-855f-b5349b56b624.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">👑 Premium Shop Deluxe</h5>
                                <p class="card-text">Land Class: 2 - 11 tiles - Atlantis</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/8e998e7a-0636-4a57-855f-b5349b56b624" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/787c0a8e-eff1-497f-a5e2-3b35ba4e8fc7.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛕 4 Squares Block</h5>
                                <p class="card-text">Land Class: 2 - 221 tiles - Shangrilla</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/787c0a8e-eff1-497f-a5e2-3b35ba4e8fc7" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/fd350e3c-4755-463b-a31c-64ed696f3595.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🗺️ TBD</h5>
                                <p class="card-text">Land Class: 2 - 15 tiles - Antarctica</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/fd350e3c-4755-463b-a31c-64ed696f3595" class="btn btn-block btn-primary" target="_blank">View Property</a>
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