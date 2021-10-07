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
    <title>Mega City: CMC, Belize | Heuze Productions - virtual business in Earth2.io and other Metaverse</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want to present you our properties in CMC, Belize.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/mega-city-cmc/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mega City: CMC, Belize | Heuze Productions" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want to present you our properties in CMC, Belize." />
    <meta property="og:url" content="https://heuzeproductions.com/mega-city-cmc/" />
    <meta property="og:site_name" content="Mega City: CMC, Belize | Heuze Productions" />
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
                <h2 class="line1">CMC</h2>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="hi-left">
                            <h2>Mega City: CMC</h2>
                            <p>Heuze Productions has bought many plots of land in CMC on Earth2.</p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="hi-right">
                            <img src="/img/cmc-spectrum3900.jpg?v=9212021" alt="CMC City" class="img_responsive" style="max-width:100%;" />
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Managed: CMC Properties</h2></div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🔷 The Larimar - Mega Casino - CMC</h5>
                                <p class="card-text">249 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://e2.me/larimar-cmc" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🌸 Sakura Casino - Downtown Casino Resort - Play / Dine / Dance</h5>
                                <p class="card-text">28 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/7942df21-be9b-44c2-bf62-68db319d8f6a" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🍩 Doughnut Shop - CMC</h5>
                                <p class="card-text">16 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/cd76fb11-e91b-4e92-8c9f-19c96b0fcbf1" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🍽️ Food On Deck - Restaurant - CMC</h5>
                                <p class="card-text">16 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/d8947fa6-a079-487e-b3a9-bc8a7f448bf6" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🥐 French Bakery - CMC</h5>
                                <p class="card-text">415 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/5067d7c2-4ad8-48a2-a0cf-467f4b7bb891" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🏵️ Pyrite - Mega Casino Resort / Shopping / Living</h5>
                                <p class="card-text">415 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://e2.me/pyrite-cmc" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">☕ Coffee, inc - Casino Megacity</h5>
                                <p class="card-text">4 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/fe36fa62-796e-4ebb-a5bd-89ebce756513" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🀄 Glass Bridge - Point-of-Interest - CMC</h5>
                                <p class="card-text">42 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/7d113528-01f6-4fb9-9df9-e56357de5a7a" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🐙 Octopus Restaurant & Casino - Under-The-Sea Suite - CMC</h5>
                                <p class="card-text">60 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/7693b60b-1adb-4e42-949e-2af3823feb8a" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🌺 Hibiscus - Mega Casino Resort / Shopping / Living</h5>
                                <p class="card-text">355 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://e2.me/hibiscus-cmc" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">✨ Blue Lazuli Casino - Mega Casino Resort / Shopping / Living</h5>
                                <p class="card-text">750 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://e2.me/lazuli-cmc" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">💎💎💎 Triple Diamond Casino Resort - CMC</h5>
                                <p class="card-text">304 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://e2.me/diamond-cmc" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">⚗️ Philosopher's Stone Casino - CMC</h5>
                                <p class="card-text">49 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/79ccd0b0-8919-41c5-8509-e95156836750" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🕹️ Digital Gaming, inc - Casino Hotel Supplier</h5>
                                <p class="card-text">33 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/320e3fdf-6f73-4434-bcae-f00fa11b7b2d" class="btn btn-block btn-primary" target="_blank">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Rental: CMC Properties</h2></div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Casino #1 - CMC</h5>
                                <p class="card-text">25 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/a88d134c-8686-40bf-9cdd-33a2f30d5205" class="btn btn-block btn-primary" target="_blank">View Casino</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Casino #2 - CMC</h5>
                                <p class="card-text">25 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/3e11df53-5017-4769-9104-aeb94e53ee3d" class="btn btn-block btn-primary" target="_blank">View Casino</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Casino #3 - CMC</h5>
                                <p class="card-text">16 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/0054979c-f8ee-4f00-84d5-a661a44bbbef" class="btn btn-block btn-primary" target="_blank">View Casino</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Premium Vacation - Albatross - CMC</h5>
                                <p class="card-text">44 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/b2c8f505-98b3-48a6-85b2-7e9cb01c034f" class="btn btn-block btn-primary" target="_blank">View Rental</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🟢 Rental Premium Vacation - Shearwater - CMC</h5>
                                <p class="card-text">44 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/c93d3d6f-4823-402f-a8b3-7ab68512181b" class="btn btn-block btn-primary" target="_blank">View Rental</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🛍️ Shopping Big Store - CMC</h5>
                                <p class="card-text">33 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/46adca9b-2b6d-4893-9117-9be09286e274" class="btn btn-block btn-primary" target="_blank">View Rental</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🛍️ Shopping Store - CMC</h5>
                                <p class="card-text">24 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/a57744ba-4e52-422e-a919-bb9c3dca310f" class="btn btn-block btn-primary" target="_blank">View Rental</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🛍️ Shopping Store - CMC</h5>
                                <p class="card-text">24 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/54e1a8c7-7384-4cdd-874e-ba0feb259d87" class="btn btn-block btn-primary" target="_blank">View Rental</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🛍️ Shopping Store - CMC</h5>
                                <p class="card-text">24 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/373b2423-5415-4326-8937-7e14c13c599a" class="btn btn-block btn-primary" target="_blank">View Rental</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">🛍️ Shopping Store - CMC</h5>
                                <p class="card-text">24 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/d8ae1eb7-201e-4855-8506-e87a05571ac5" class="btn btn-block btn-primary" target="_blank">View Rental</a>
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