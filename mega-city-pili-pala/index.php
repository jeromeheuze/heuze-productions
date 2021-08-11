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
    <title>Mega City: Pili-Pala, Samoa | Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want to present you our properties in Pili-Pala City.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/mega-city-pili-pala/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mega City: Pili-Pala, Samoa | Heuze Productions" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want to present you our properties in Pili-Pala City." />
    <meta property="og:url" content="https://heuzeproductions.com/mega-city-pili-pala/" />
    <meta property="og:site_name" content="Mega City: Pili-Pala, Samoa | Heuze Productions" />
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
                <div class="col-4 col-md-6 branding"><a href="/">Heuze Productions</a></div>
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
                <h1 class="line1">Pili-Pala</h1>
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
                            <h2>Mega City: Pili-Pala in Samoa</h2>
                            <p>Heuze Productions has bought many plots of land in Pili-Pala on Earth2.</p>

                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="hi-right">
                            <img src="/img/pili-pala.jpg" alt="Pili-Pala City" class="img_responsive" />
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Managed: Pili-Pala Properties</h2></div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🍜 Dock Restaurants and Living - Pili-Pala City</h5>
                                <p class="card-text">40 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/64f6a6f0-14fa-4416-933e-0b04287b9807" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🎡 Promenade Entertainment - Pili-Pala City</h5>
                                <p class="card-text">40 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/e55844e0-73bd-4db2-9a06-3f08e9a2195f" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🎡 Promenade Entertainment Docks - Pili-Pala City</h5>
                                <p class="card-text">73 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/150b82a9-37c3-437e-82ae-cb4dd4e39206" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🍁 Maple - Premium Tech Housing - Pili-Pala City</h5>
                                <p class="card-text">189 tiles - 21 properties</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/4688b486-9716-455d-947d-911ab36d56b1" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🎇 Larabee - Premium Rental Housing - Pili-Pala City</h5>
                                <p class="card-text">90 tiles - 10 properties</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/421fe3d8-3a5c-4e85-a70b-0cda88ebbbc5" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🌾 Agronomy, inc - Processing & Export - Pili-Pala City</h5>
                                <p class="card-text">144 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/ebfafc3f-0f9b-4ce1-acee-f51df9f3013d" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">☕ Plaza Coffee - Pili-Pala City</h5>
                                <p class="card-text">12 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Advertising opportunities for coffee products - high traffic area - Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/1bf40f99-19f1-44e9-8391-4d1d04d699e4" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🚗 SpeedOrbit - Vehicle Maker - Pili-Pala City</h5>
                                <p class="card-text">144 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Player vehicle maker - showroom & partners advertising - Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/1bf40f99-19f1-44e9-8391-4d1d04d699e4" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">📚 Bookstore - Pili-Pala City</h5>
                                <p class="card-text">9 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Bookstore - library & partners advertising - Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/47547c09-bbf1-46b4-bb46-fb35bf8bafce" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🏦 Open Offices - Pili-Pala City</h5>
                                <p class="card-text">9 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/906f2961-07c2-4537-9c7b-525ee08eeccd" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🏦 Downtown Shops - 3 floors - Pili-Pala City</h5>
                                <p class="card-text">18 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Be part of 3 floors of shops between 2 towers - Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/906f2961-07c2-4537-9c7b-525ee08eeccd" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🏢 Offices & Luxury Apartments - Pili-Pala City</h5>
                                <p class="card-text">72 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Rent apartments and offices downtown - Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/168ba4a1-ca5f-474f-a224-ab03307192f0" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🏫 Learning Center - Pili-Pala City</h5>
                                <p class="card-text">18 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Watch announcements of live sessions or pre-recorded - Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/1b035188-d17c-4eb8-b745-1f75456d885b" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🏯 Mega Mall and Premium Apt - Pili-Pala City</h5>
                                <p class="card-text">18 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Downtown Mall and beautiful view of city plaza - Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/bf6dd1fc-ffdd-44df-a301-f2626ff04545" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Rental: Pili-Pala Properties</h2></div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #1 - Pili-Pala City</h5>
                                <p class="card-text">16 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/bdeba459-b118-44bc-8c3e-401208b1d9db" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #2 - Pili-Pala City</h5>
                                <p class="card-text">16 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/4029d959-322b-4fb0-8285-4d34a4c42d1e" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #3 - Pili-Pala City</h5>
                                <p class="card-text">8 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/4a3384b5-826f-45dc-b575-b2f7dc4512b5" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #4 - Pili-Pala City</h5>
                                <p class="card-text">16 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/ad9bbb78-691d-4fa7-a439-99582b7fe162" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #5 - Pili-Pala City</h5>
                                <p class="card-text">9 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/9075106a-f355-4e79-be2b-d96c8dd7f01e" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #5 - Pili-Pala City</h5>
                                <p class="card-text">9 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/9075106a-f355-4e79-be2b-d96c8dd7f01e" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #6 - Pili-Pala City</h5>
                                <p class="card-text">9 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/aa710578-d7db-4900-9883-ae0dc5b730ab" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #7 - Pili-Pala City</h5>
                                <p class="card-text">9 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/4050b26b-eb34-4957-be15-7ed1515d076b" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Shop/Office #8 - Pili-Pala City</h5>
                                <p class="card-text">9 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/2e20c7c1-2c10-49e8-a5f4-2bc156e14e93" class="btn btn-block btn-primary" target="_blank">View Property</a>
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