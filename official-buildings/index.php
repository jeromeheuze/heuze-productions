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
    <title>Official Buildings | Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/official-buildings/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/official-buildings/" />
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
                <h1 class="line1">Our Official Buildings on Earth2.io</h1>
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
                            <h2>What are our Official Buildings on Earth2.io?</h2>
                            <p>Heuze Productions is committed to have dedicated land area where we will display our portfolio of virtual lands we own. You will be able to visit our offices and get to know what we have to offer in Earth2. We have selected specific virtual lands for your avatars and businesses. Prepared to be amaze by our creativity!</p>
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Official Buildings</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions HQ</h5>
                                <p class="card-text">Land Class: 2 - 42 tiles - ExpoCity</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/448d672b-eba2-4bc5-b1ef-d85a9a986815" target="_blank" class="btn btn-block btn-primary">View HQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Office</h5>
                                <p class="card-text">Land Class: 2 - 20 tiles - Japan</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/0203e8ed-dc8d-48bc-9de2-c43ec2c0408e" target="_blank" class="btn btn-block btn-primary">View HQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🔬 Heuze Productions Research Lab</h5>
                                <p class="card-text">Land Class: 2 - 55 tiles - Brainers Town - Paradise</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/752626ce-bd69-4961-bc67-6d85ed272f02" target="_blank" class="btn btn-block btn-primary">View Lab</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - State1.io</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Djibouti</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://www.state1.io/" target="_blank" class="btn btn-block btn-primary">View Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - StarCity</h5>
                                <p class="card-text">Land Class: 2 - 25 tiles - Morocco</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ac934688-6eef-48f5-a57d-d755e2cbbdf6" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Nyanga</h5>
                                <p class="card-text">Land Class: 2 - 29 tiles - Gabon</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/23bbbdcd-5424-4708-b272-47adb963ebbd" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Milne Bay</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Papua New Guinea</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/39347287-fa70-4be6-8082-77bda8ddfd46" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">📚 Virtual Campus - State1 - HeuzeProductions</h5>
                                <p class="card-text">Land Class: 2 - 31 tiles - Djibouti</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/42c908fe-dc45-40f8-a44f-12eb81752449" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Official Resources</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-woodlog-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🪓 WoodLog, inc HQ</h5>
                                <p class="card-text">579 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-agronomy-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🌾 Agronomy, inc HQ</h5>
                                <p class="card-text">203 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-cuprum-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">⛏ Cuprum, inc HQ</h5>
                                <p class="card-text">962 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
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