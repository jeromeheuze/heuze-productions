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
    <title>Estates Properties | Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/estates-properties/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/estates-properties/" />
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
                <h1 class="line1">Rent your next house on Earth2.io</h1>
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
                            <h2>Rent properties in Earth2.io</h2>
                            <p>Heuze Productions has a great selection of rentals for your needs. Island getaway or full buildings for your business. Even start-ups can rent and meet to build their next huge success in private. Take your first step into Earth2 virtual world and enjoy without buying and maintaining the land.</p>
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Estates Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/9e5ee4ec-3b98-4d12-8a56-e0c41b32894b.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⛰ Crystalmere - Crater Estate</h5>
                                <p class="card-text">Land Class: 2 - 88 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/9e5ee4ec-3b98-4d12-8a56-e0c41b32894b" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/7e0cc9d4-429d-4e95-b864-b7084b600784.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏠 Solambra Estate with docks</h5>
                                <p class="card-text">Land Class: 2 - 16 tiles - Panama</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/7e0cc9d4-429d-4e95-b864-b7084b600784" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/36c4fd83-e2f8-4b8e-8f1a-1ae22b51a8b8.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏠 Cliff Estate</h5>
                                <p class="card-text">Land Class: 2 - 36 tiles - Isle of Man</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/36c4fd83-e2f8-4b8e-8f1a-1ae22b51a8b8" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/e28602cc-acac-4549-bc77-f262fe7553f1.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏕️ River Camp Estates</h5>
                                <p class="card-text">Land Class: 2 - 54 tiles - Bulgaria</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/e28602cc-acac-4549-bc77-f262fe7553f1" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/ac5430a0-8bac-4114-a175-94f1c84ef338.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏕️ Lake view Retreat</h5>
                                <p class="card-text">Land Class: 2 - 13 tiles - Kyrgyzstan</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ac5430a0-8bac-4114-a175-94f1c84ef338" class="btn btn-block btn-primary" target="_blank">View Property</a>
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