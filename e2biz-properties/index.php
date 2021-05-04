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
    <title>E2Biz Properties | Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/e2biz-properties/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/e2biz-properties/" />
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
                <h1 class="line1">Earth2 virtual businesses (E2Biz)</h1>
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
                            <h2>Managing several E2 businesses</h2>
                            <p>Discover our certified virtual businesses ran and managed by Heuze Productions' team. We have your avatar in mind first. Stay, buy, play or explore in our many virtual properties in Earth2.io!</p>
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">E2Biz Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/1bf40f99-19f1-44e9-8391-4d1d04d699e4.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">☕ Plaza Coffee</h5>
                                <p class="card-text">Land Class: 2 - 12 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/1bf40f99-19f1-44e9-8391-4d1d04d699e4" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/47547c09-bbf1-46b4-bb46-fb35bf8bafce.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">📚 Bookstore</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/47547c09-bbf1-46b4-bb46-fb35bf8bafce" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/6cc7630c-a77e-4618-a399-0fc12baf3ae4.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🚗 SpeedOrbit - Vehicle Maker</h5>
                                <p class="card-text">Land Class: 2 - 144 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/6cc7630c-a77e-4618-a399-0fc12baf3ae4" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/06130c41-1751-4b6e-9bbd-05fcd20ef39f.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏰 Mega Mall</h5>
                                <p class="card-text">Land Class: 2 - 132 tiles - Bulgaria</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/06130c41-1751-4b6e-9bbd-05fcd20ef39f" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/c2158cfc-7b38-4b72-a245-d1c8e24a0b02.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🍚 Rice Fields</h5>
                                <p class="card-text">Land Class: 2 - 22 tiles - Vietnam</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/c2158cfc-7b38-4b72-a245-d1c8e24a0b02" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/3f1d20e5-8c22-4eda-9f3c-c86efd0b829b.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⚒ Fort Labrador</h5>
                                <p class="card-text">Land Class: 3 - 4 tiles - Canada</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/3f1d20e5-8c22-4eda-9f3c-c86efd0b829b" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/c698e9a1-e561-4ea7-be22-fa3a426042da.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🚢 Porturia - Living / Shops / Import-Export</h5>
                                <p class="card-text">Land Class: 2 - 100 tiles - Algeria</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/c698e9a1-e561-4ea7-be22-fa3a426042da" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/b60a3fde-a0d4-485f-b47b-728368755153.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🗝️ Mystery House</h5>
                                <p class="card-text">Land Class: 2 - 15 tiles - Romania</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/b60a3fde-a0d4-485f-b47b-728368755153" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/0712fd37-ce84-4bd0-91ae-df15f3074557.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⚒ Fort Tirana</h5>
                                <p class="card-text">Land Class: 2 - 10 tiles - Albania</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/0712fd37-ce84-4bd0-91ae-df15f3074557" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/92bd7f15-263e-4a5f-8812-fb81fad7def9.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🦊 Animal Center - Supplies and Clinic - Pet Cafe</h5>
                                <p class="card-text">Land Class: 2 - 37 tiles - Bulgaria</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/92bd7f15-263e-4a5f-8812-fb81fad7def9" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/4940c797-675e-4665-9dbf-89e8a55974d0.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⚒ Fort Kabul</h5>
                                <p class="card-text">Land Class: 2 - 6 tiles - Afghanistan</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/4940c797-675e-4665-9dbf-89e8a55974d0" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-woodlog-e2.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🪓 WoodLog, inc - E2biz</h5>
                                <p class="card-text">Land Class: 2 - 54 tiles - Equatorial Guinea</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ffc403ac-99c3-475d-bc41-32a3d1453a1a" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-woodlog-e2.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🪓 WoodLog, inc - E2biz</h5>
                                <p class="card-text">Land Class: 2 - 24 tiles - Bangladesh</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/e9ffc951-cbc5-4098-8c87-92f41b12beae" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-woodlog-e2.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🪓 WoodLog, inc - E2biz</h5>
                                <p class="card-text">Land Class: 2 - 24 tiles - Niue</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/33b60e0d-b9e4-4fdf-9d74-61cd944531dd" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-woodlog-e2.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🪓 WoodLog, inc - E2biz</h5>
                                <p class="card-text">Land Class: 2 - 29 tiles - Romania</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/be46e42b-cec7-4a3e-98d3-465a5b793392" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/ebd310e8-9c32-4e41-a502-7b3505740b05.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⛲ Zen Center - E2biz</h5>
                                <p class="card-text">Land Class: 2 - 70 tiles - Bosnia Herzegovina</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ebd310e8-9c32-4e41-a502-7b3505740b05" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/47cf5b98-8866-4d90-b4d9-39f2fb88afd0.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⏳ Sand Export, inc - E2biz</h5>
                                <p class="card-text">Land Class: 2 - 30 tiles - Bosnia Herzegovina</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/47cf5b98-8866-4d90-b4d9-39f2fb88afd0" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/72ecac93-6ad1-4efa-967a-b5f441374a0c.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🥇 Department of E2 Tourism (DOT)</h5>
                                <p class="card-text">Land Class: 2 - 12 tiles - Switzerland</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/72ecac93-6ad1-4efa-967a-b5f441374a0c" class="btn btn-block btn-primary" target="_blank">View Property</a>
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