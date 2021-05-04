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
                            <p>We are committed to provide great Earth2 entertainment and housing for the players. We have properties in megacity, we have vacation resorts, housing for sale and rent, several malls and shops and plenty of private beaches to enjoy and relax. We have a wonderful selection of properties around the world of Earth2. We will be offering web design / development freelancing on <a href="https://e2reviews.com/" target="_blank">E2Reviews</a>.</p>
                            <p><strong>Mega Cities:</strong> ExpoCity, Shangralla, Omega City, Antartica, Saint David, Iron Clan, Atlantis, Pili-Pala, Casino City, State1.</p>
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

                    <div class="col-xs-4"><a href="/official-buildings/"><h2 style="margin-top:3rem;">Official Buildings</h2></a></div>
                    <div class="col-xs-4"><a href="/e2biz-properties/"><h2 style="margin-top:3rem;">E2Biz Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/entertainment-properties/"><h2 style="margin-top:3rem;">Entertainment Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/rental-properties/"><h2 style="margin-top:3rem;">Rental Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/resort-properties/"><h2 style="margin-top:3rem;">Resort Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/estates-properties/"><h2 style="margin-top:3rem;">Estates Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/mega-city-properties/"><h2 style="margin-top:3rem;">Mega City Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/expo-city-properties/"><h2 style="margin-top:3rem;">Expo City Properties</h2></a></div>

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