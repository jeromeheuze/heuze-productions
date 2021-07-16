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
    <title>Rental Properties | Heuze Productions - virtual business in Earth2.io</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/rental-properties/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/rental-properties/" />
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
                <h1 class="line1">Rent a property in Earth2.io</h1>
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
                            <h2>Would you like to rent a property in Earth2.io?</h2>
                            <p>Heuze Productions has a wonderful selection of pre-build, pre-furnished locations at an affordable price. We have apartments complex, shopping malls, megacity offices, great views of the natural wonders of Earth2. Prepared to be amaze and claim your virtual space for pleasure or business!</p>
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Rental Properties</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/d2c2a0af-653a-49d9-baf3-bd6083719628.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/56156b9b-2569-4039-9c0a-c3fef3190ee8.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/2a32f0a9-4e30-4dc1-94af-641d0d238c93.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/2303b5ab-e038-408c-8a27-412c19f81eed.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/fafffda0-b819-443e-962e-52312c12cb55.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/0ca4bc2a-da0c-4199-af22-d9c1493b390c.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/906f2961-07c2-4537-9c7b-525ee08eeccd.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/1a4936d9-22a7-47f4-acbe-ad9e590a2b21.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/1b035188-d17c-4eb8-b745-1f75456d885b.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/168ba4a1-ca5f-474f-a224-ab03307192f0.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/e81dd63f-856f-4f2e-ae43-c9835e7daadf.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/715e3d89-6d8d-448c-a311-bdbfe768f770.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/34d4c6cd-9850-4fba-a186-6f335a3fb1d3.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/e6fe114e-69cc-4f16-b06e-2ac9bcbac805.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/b91cd2fe-d597-491f-99f0-67b8c4866af0.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/f36ea4af-5aeb-4713-bb92-0cf3f1ad4075.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/77e20a71-64a1-42d8-96e8-c5575950e595.jpg" class="card-img-top" alt="E2 Property">
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
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/6733204a-77ed-412d-8d5b-a7c5f8d7ce69.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🍂 Fallen Leaf - Luxury Apartment Green Living</h5>
                                <p class="card-text">Land Class: 2 - 97 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/6733204a-77ed-412d-8d5b-a7c5f8d7ce69" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/4688b486-9716-455d-947d-911ab36d56b1.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🍁 Maple - Premium Tech Housing</h5>
                                <p class="card-text">Land Class: 2 - 189 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/4688b486-9716-455d-947d-911ab36d56b1" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/421fe3d8-3a5c-4e85-a70b-0cda88ebbbc5.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🎇 Larabee - Premium Rental Housing</h5>
                                <p class="card-text">Land Class: 2 - 90 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/421fe3d8-3a5c-4e85-a70b-0cda88ebbbc5" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/9e5ee4ec-3b98-4d12-8a56-e0c41b32894b.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/7e0cc9d4-429d-4e95-b864-b7084b600784.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/e28602cc-acac-4549-bc77-f262fe7553f1.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/ac5430a0-8bac-4114-a175-94f1c84ef338.jpg" class="card-img-top" alt="E2 Property">
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