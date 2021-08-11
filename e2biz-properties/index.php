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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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
                    <div class="col-xs-12">
                        <div class="card">
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