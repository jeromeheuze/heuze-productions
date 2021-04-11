<?php
include "./includes/global.php";
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
    <title>Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/" />
    <meta property="og:site_name" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:image" content="https://heuzeproductions.com/img/sandeep-swarnkar-dm7M67VaEBc-unsplash-darker.jpg" />
    <meta property="og:image:secure_url" content="https://heuzeproductions.com/img/sandeep-swarnkar-dm7M67VaEBc-unsplash-darker.jpg" />
    <meta property="og:image:width" content="798" />
    <meta property="og:image:height" content="532" />
    <?php include "./includes/head.php"; ?>
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
                <div class="col-4 col-md-6 branding"><a href="#top"><h1>Heuze Productions</h1></a></div>
                <div class="col-8 col-md-6 menu">
                    <ul>
                        <li><a href="#About">About</a></li>
                        <li><a href="#Properties">Properties</a></li>
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
                <h1 class="line1">Earth2 business in-game</h1>
                <p class="line2"><strong>Heuze Productions</strong> is building several <span>in-game services</span> for avatars living inside E2. We want your stay in all our properties to be the best.</p>
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
                            <h2>Hi, I'm Jerome Heuze aka Spectrum3900</h2>
                            <p>We are committed to provide great Earth2 entertainment and housing for the players. We have properties in megacity, we have vacation resorts, housing for sale and rent, several malls and shops and plenty of private beaches to enjoy and relax. We have a wonderful selection of properties around the world of Earth2.</p>
                            <p><strong>Mega Cities:</strong> ExpoCity, Shangralla, Omega City, Antartica, Saint David, Iron Clan, Atlantis, Pili-Pala</p>
                            <p><strong>Vacation Resorts:</strong> Kiribati Islands, Balboa Islands, Palau Reefs, Nicaragua, Panama Islands, Liechtenstein Lakes</p>
                            <p><strong>Housing for Sale / Rent:</strong> Beach houses, Private islands, River Estates</p>
                            <p><strong>Mall and Shops:</strong> Belarus, Bulgaria, Panama Hospital, Panama Port Warehouse</p>
                            <p><strong>Resources / Mining:</strong> Namibia, Bulgaria, Talas, Oudalan, Nansha Qundao</p>
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

    <div class="block-tools">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-6 text-side"><p>Some Tools I use while working on Earth2 Architecture:</p></div>
                    <div class="col-12 col-md-6 icon-side">
                        <ul>
                            <li><a href="https://unity.com/" rel="noopener" target="_blank"><img src="/img/1200px-Unity_Technologies_logo.svg.png" height="50" alt="Unity3D" /></a></li>
                            <li><a href="https://www.blender.org/" rel="noopener" target="_blank"><img src="/img/1252px-Blender_logo_no_text.svg.png" width="50" height="50" alt="Blender3D" /></a></li>
                            <li><a href="https://discordapp.com/" rel="noopener" target="_blank"><img src="/img/Discord-Logo-Color.<?=$fileTypePng;?>" width="50" height="50" alt="Discord App" /></a></li>
                            <li><a href="https://www.twitch.tv/spectrum3900" rel="noopener" target="_blank"><img src="/img/twitch-purple-icon-logo-vector.<?=$fileTypePng;?>" width="50" height="50" alt="Twitch" /></a></li>
                        </ul>
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
                            <img src="/img/e2/448d672b-eba2-4bc5-b1ef-d85a9a986815.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
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
                            <img src="/img/e2/eumarket-small.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🕹️ EntropiaMarket HQ</h5>
                                <p class="card-text">Land Class: 2 - 16 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://entropiamarket.com/" target="_blank" class="btn btn-block btn-primary">View Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/euhub-small.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🕹️ EntropiaHub HQ</h5>
                                <p class="card-text">Land Class: 2 - 16 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://entropiahub.com/" target="_blank" class="btn btn-block btn-primary">View Website</a>
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Entertainment Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/e55844e0-73bd-4db2-9a06-3f08e9a2195f.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🎡 Promenade Entertainment</h5>
                                <p class="card-text">Land Class: 2 - 40 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/e55844e0-73bd-4db2-9a06-3f08e9a2195f" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/64f6a6f0-14fa-4416-933e-0b04287b9807.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🍜 Dock Restaurants and Living</h5>
                                <p class="card-text">Land Class: 2 - 40 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/64f6a6f0-14fa-4416-933e-0b04287b9807" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/248fbf39-54f9-4be1-bbc2-1e6b0c565ce0.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🎯 Olympic Archery Center</h5>
                                <p class="card-text">Land Class: 2 - 91 tiles - Belarus</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/248fbf39-54f9-4be1-bbc2-1e6b0c565ce0" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/ffc47247-6a33-4dfb-bff1-dfff8d436cd8.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏹 Field Archery World</h5>
                                <p class="card-text">Land Class: 2 - 104 tiles - Shops, Expo, Living in Belarus</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ffc47247-6a33-4dfb-bff1-dfff8d436cd8" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/478b13b8-e6a5-43f8-80be-2c008641c3d2.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🎏 FishingWorld Expo</h5>
                                <p class="card-text">Land Class: 2 - 117 tiles - Belarus</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/478b13b8-e6a5-43f8-80be-2c008641c3d2" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/bf6dd1fc-ffdd-44df-a301-f2626ff04545.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏯 Mega Mall and Premium Apt</h5>
                                <p class="card-text">Land Class: 2 - 36 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/bf6dd1fc-ffdd-44df-a301-f2626ff04545" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/e5081f9e-a745-4eaf-96f6-4ad6dc6a15a8.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛕 Shop Center and Apt</h5>
                                <p class="card-text">Land Class: 2 - 84 tiles - Shangrilla</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/e5081f9e-a745-4eaf-96f6-4ad6dc6a15a8" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/348acf82-6d09-45a0-9cf0-13db308ee543.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">📰 E2Travels Magazine HQ</h5>
                                <p class="card-text">Land Class: 2 - 16 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/348acf82-6d09-45a0-9cf0-13db308ee543" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/150b82a9-37c3-437e-82ae-cb4dd4e39206.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🎡 Promenade Entertainment Docks</h5>
                                <p class="card-text">Land Class: 2 - 73 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/150b82a9-37c3-437e-82ae-cb4dd4e39206" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Rental Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/8c48673d-9bca-4bcb-a167-a8e3fca2041c.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">☀ California Premium Estates - Club2</h5>
                                <p class="card-text">Land Class: 2 - 72 tiles - Dominica</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/8c48673d-9bca-4bcb-a167-a8e3fca2041c" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/d2c2a0af-653a-49d9-baf3-bd6083719628.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⛴ Premium Apts & Shops</h5>
                                <p class="card-text">Land Class: 2 - 150 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/d2c2a0af-653a-49d9-baf3-bd6083719628" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/56156b9b-2569-4039-9c0a-c3fef3190ee8.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛕 Shop #1</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Shangrilla Beach City</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/56156b9b-2569-4039-9c0a-c3fef3190ee8" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/2a32f0a9-4e30-4dc1-94af-641d0d238c93.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛕 Shop #2</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Shangrilla Beach City</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/2a32f0a9-4e30-4dc1-94af-641d0d238c93" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/2303b5ab-e038-408c-8a27-412c19f81eed.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛕 Shop #3</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Shangrilla Beach City</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/2303b5ab-e038-408c-8a27-412c19f81eed" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/fafffda0-b819-443e-962e-52312c12cb55.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛕 Shop #4</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Shangrilla Beach City</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/fafffda0-b819-443e-962e-52312c12cb55" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/0ca4bc2a-da0c-4199-af22-d9c1493b390c.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛕 Shop #36</h5>
                                <p class="card-text">Land Class: 2 - 12 tiles - Shangrilla</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/0ca4bc2a-da0c-4199-af22-d9c1493b390c" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/906f2961-07c2-4537-9c7b-525ee08eeccd.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏦 Open Offices</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/906f2961-07c2-4537-9c7b-525ee08eeccd" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/1a4936d9-22a7-47f4-acbe-ad9e590a2b21.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏦 Downtown Shops</h5>
                                <p class="card-text">Land Class: 2 - 18 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/1a4936d9-22a7-47f4-acbe-ad9e590a2b21" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/1b035188-d17c-4eb8-b745-1f75456d885b.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏫 Learning Center</h5>
                                <p class="card-text">Land Class: 2 - 18 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/1b035188-d17c-4eb8-b745-1f75456d885b" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/168ba4a1-ca5f-474f-a224-ab03307192f0.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏢 Offices & Luxury Apartments</h5>
                                <p class="card-text">Land Class: 2 - 72 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/168ba4a1-ca5f-474f-a224-ab03307192f0" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/e81dd63f-856f-4f2e-ae43-c9835e7daadf.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏪 Minsk Store</h5>
                                <p class="card-text">Land Class: 2 - 44 tiles - Belarus</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/e81dd63f-856f-4f2e-ae43-c9835e7daadf" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/715e3d89-6d8d-448c-a311-bdbfe768f770.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏝️ Balboa Beach Luxe Properties</h5>
                                <p class="card-text">Land Class: 2 - 83 tiles - Panama</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/715e3d89-6d8d-448c-a311-bdbfe768f770" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/34d4c6cd-9850-4fba-a186-6f335a3fb1d3.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏠 Lake House #1</h5>
                                <p class="card-text">Land Class: 2 - 12 tiles - Bulgaria</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/34d4c6cd-9850-4fba-a186-6f335a3fb1d3" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/e6fe114e-69cc-4f16-b06e-2ac9bcbac805.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">River Camp</h5>
                                <p class="card-text">Land Class: 2 - 24 tiles - Mongolia</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/e6fe114e-69cc-4f16-b06e-2ac9bcbac805" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/b91cd2fe-d597-491f-99f0-67b8c4866af0.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⛰ Lake Complex</h5>
                                <p class="card-text">Land Class: 2 - 36 tiles - Uzbekistan</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/b91cd2fe-d597-491f-99f0-67b8c4866af0" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/f36ea4af-5aeb-4713-bb92-0cf3f1ad4075.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏕️ Lake House</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Kyrgyzstan</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/f36ea4af-5aeb-4713-bb92-0cf3f1ad4075" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/77e20a71-64a1-42d8-96e8-c5575950e595.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏠 Apt Rentals - Iceland</h5>
                                <p class="card-text">Land Class: 2 - 18 tiles - Reykjavík, Iceland</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/77e20a71-64a1-42d8-96e8-c5575950e595" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Resort Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/dji-099-sm.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏨 White Lagoon Resort, Bulgaria</h5>
                                <p class="card-text">Land Class: 2 - 529 tiles - Bulgaria</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/08e67213-b773-4650-abbc-cc65dc0a8dc8" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/aa945b29-d333-4e87-b214-5748433da426.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏖️ Sandy Cove Resort</h5>
                                <p class="card-text">Land Class: 2 - 168 tiles - Kiribati</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/aa945b29-d333-4e87-b214-5748433da426" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/d999b109-b894-4b4a-b549-4d172bbd8e22.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🤿 Diving Resort</h5>
                                <p class="card-text">Land Class: 2 - 255 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/d999b109-b894-4b4a-b549-4d172bbd8e22" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/a45e67c2-9ea9-41ef-be15-10bc3aa11fc5.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🤿 La Palme Resort</h5>
                                <p class="card-text">Land Class: 2 - 18 tiles - Atlantis</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/a45e67c2-9ea9-41ef-be15-10bc3aa11fc5" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/abd7e6be-05f1-4020-9c7b-d3cee32a435a.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏖️ Midnight Lagoon Resort - Main Office</h5>
                                <p class="card-text">Land Class: 2 - 105 tiles - Palau</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/abd7e6be-05f1-4020-9c7b-d3cee32a435a" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/18c18edd-0239-4d9c-a335-000a9197a392.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏝️ Midnight Lagoon Resort</h5>
                                <p class="card-text">Land Class: 2 - 80 tiles - Palau</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/18c18edd-0239-4d9c-a335-000a9197a392" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/35ca4424-627d-4a5a-8d2b-e9e6feefca79.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏖️ Bungalow Resort Hotel</h5>
                                <p class="card-text">Land Class: 2 - 87 tiles - Panama</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/35ca4424-627d-4a5a-8d2b-e9e6feefca79" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/d948afa3-fa04-4db3-81f2-a73eee87e2b3.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏖️ Kiribati Seaside Islands Complex</h5>
                                <p class="card-text">Land Class: 2 - 50 tiles - Kiribati</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/d948afa3-fa04-4db3-81f2-a73eee87e2b3" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/ae9bcd6d-dd62-4ff3-b5f1-4053897bade2.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏞️ River Resort</h5>
                                <p class="card-text">Land Class: 2 - 57 tiles - Liechtenstein</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ae9bcd6d-dd62-4ff3-b5f1-4053897bade2" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/bb6e935b-7e57-45f8-9338-1b7d95205889.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🏖️ Balboa Rose Beach</h5>
                                <p class="card-text">Land Class: 2 - 144 tiles - Panama</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/bb6e935b-7e57-45f8-9338-1b7d95205889" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Expo City Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/5084159e-7aac-4ce0-8f4a-0aadcd9bff38.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🕹️ Video Games Booths</h5>
                                <p class="card-text">Land Class: 2 - 270 tiles - ExpoCity</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/5084159e-7aac-4ce0-8f4a-0aadcd9bff38" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/f432aff9-c3b6-4950-9715-33b9834e42e5.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🛶 Vacation Rentals</h5>
                                <p class="card-text">Land Class: 2 - 30 tiles - ExpoCity</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/f432aff9-c3b6-4950-9715-33b9834e42e5" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/1df34d46-612a-4122-805d-b7f75bbf029b.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⛵ Booth - HouseBoat, E2biz</h5>
                                <p class="card-text">Land Class: 2 - 35 tiles - ExpoCity</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/1df34d46-612a-4122-805d-b7f75bbf029b" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/8520f4c5-a780-45c3-aa56-3c0b7c19bd22.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">🚙 4x4 Vehicles</h5>
                                <p class="card-text">Land Class: 2 - 35 tiles - ExpoCity</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/8520f4c5-a780-45c3-aa56-3c0b7c19bd22" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/725acade-2122-4a81-a7bc-16ad3207c28f.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">⛱ Booth Earth2Rentals.com</h5>
                                <p class="card-text">Land Class: 2 - 30 tiles - ExpoCity</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/725acade-2122-4a81-a7bc-16ad3207c28f" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/ea72ff2f-3514-453c-a6da-33df6d7ba35e.jpg" class="card-img-top" alt="E2 Property" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">✨ Entertainment Furniture - E2Biz</h5>
                                <p class="card-text">Land Class: 2 - 30 tiles - ExpoCity</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ea72ff2f-3514-453c-a6da-33df6d7ba35e" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include "./includes/footer.php"; ?>

</main>
<?php include "./includes/scripts.php"; ?>
<script type="text/javascript">
</script>
</body>
</html>