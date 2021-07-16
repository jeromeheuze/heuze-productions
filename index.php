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
    <meta property="og:image" content="https://heuzeproductions.com/img/hpe2-fb.jpg" />
    <meta property="og:image:secure_url" content="https://heuzeproductions.com/img/hpe2-fb.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <?php include "./includes/head.php"; ?>
    <style>
        .card {
            margin-bottom: 2rem;
        }
        .ribbon {
            position: absolute;
            right: -5px; top: -5px;
            z-index: 1;
            overflow: hidden;
            width: 75px; height: 75px;
            text-align: right;
        }
        .ribbon span {
            font-size: 10px;
            font-weight: bold;
            color: #FFF;
            text-transform: uppercase;
            text-align: center;
            line-height: 20px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            width: 100px;
            display: block;
            background: #79A70A;
            background: linear-gradient(#2989d8 0%, #1e5799 100%);
            box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
            position: absolute;
            top: 19px; right: -21px;
        }
        .ribbon span::before {
            content: "";
            position: absolute; left: 0px; top: 100%;
            z-index: -1;
            border-left: 3px solid #1e5799;
            border-right: 3px solid transparent;
            border-bottom: 3px solid transparent;
            border-top: 3px solid #1e5799;
        }
        .ribbon span::after {
            content: "";
            position: absolute; right: 0px; top: 100%;
            z-index: -1;
            border-left: 3px solid transparent;
            border-right: 3px solid #1e5799;
            border-bottom: 3px solid transparent;
            border-top: 3px solid #1e5799;
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
                            <p>We are committed to provide great <a href="https://earth2.io/" rel="noreferrer" target="_blank">Earth2.io</a> entertainment and housing for the players. We have properties in megacities, we have vacation resorts, housing for sale and rent, several malls and shops and plenty of private beaches to enjoy and relax. We have a wonderful selection of properties around the world of Earth2. We are in a very early stage and Earth2 has a very promising future.</p>
                            <p>We bought some virtual properties in <a href="https://afterearth.io/" rel="noreferrer" target="_blank">AfterEarth.io</a> to acquire some more properties like Northwestern Michigan College Campus; Bear River Casino Resort; ThunderValley Casino Resort; Graton Resort & Casino; Twin Pine Casino; Valley View Casino & Hotel; Red Hawk Casino; Konocti Vista Casino and Resort. We will see what we can do in the platform as it gets released.</p>
                            <p>We invested into virtual properties in <a href="https://metaearth.io/" rel="noreferrer" target="_blank">MetaEarth.io</a> to acquire the following properties: Montage Deer Valley (Park City, Utah); Amangiri (Canyon Point, Southern Utah); Montage Palmetto Bluff (Bluffton, SC); Eau Palm Beach Resort & Spa (Palm Beach Island); Four Seasons Resort and Residences Vail (Vail, CO). Stay tuned to learn what we will build.</p>
                            <p><strong>Mega Cities:</strong> ExpoCity, Shangralla, Omega City, Antarctica, Saint David, Iron Clan, Atlantis, Pili-Pala, Casino City, State1, <a href="https://discord.gg/sar5cxvQ" target="_blank">Brainers Town - Paradise</a>, Resource District Network.</p>
                            <p><strong>Vacation Resorts:</strong> Kiribati Islands, Balboa Islands, Palau Reefs, Nicaragua, Panama Islands, Liechtenstein Lakes</p>
                            <p><strong>Housing for Sale / Rent:</strong> Beach houses, Private islands, River Estates</p>
                            <p><strong>Mall and Shops:</strong> Belarus, Bulgaria, Panama Hospital, Panama Port Warehouse</p>
                            <p><strong>Resources / Mining:</strong> Namibia, Bulgaria, Talas, Oudalan, Nansha Qundao</p>
                            <p>Visit my <a href="https://app.earth2.io/#profile/85c750d8-93f6-4e71-bc53-1b7a509d7a75" target="_blank">Earth2 Profile</a></p>
                            <p>Visit my <a href="https://afterearth.io/profile/spectrum3900" target="_blank">AfterEarth Profile</a></p>
                            <p>Checkout <a href="/what-is-earth2/" target="_blank">What is Earth2?</a> - for a quick review of the game platform.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="hi-right">
                            <div class="book" style="margin: 5vh auto;width: 300px;">
                                <div class="thebook" style="position: relative;width:294px;height:440px;">
                                    <img src="/img/cover-1.png" alt="book cover" style="width:294px;height: 440px;margin: 0 auto;border: 1px solid #ccc;">
                                    <div class="ribbon"><span>Just released</span></div>
                                </div>
                                <h3>Earth2 Tile Planner: Design and Plan your E2 Tiles</h3>
                                <p><strong>$6.99</strong></p>
                                <p>Paperback – June 9, 2021</p>
                                <p>Have you bought some tiles in Earth2 and have some ideas to write down? Use our well-designed planner where you can see top and isometric view of your building as you draw them.</p>
                                <p><a href="https://www.amazon.com/dp/B096TTQHQZ" target="_blank">BUY NOW</a> - <a href="/pdf/earth2-tile-planner-freepreview-v1.pdf" target="_blank">FREE PREVIEW</a></p>
                            </div>
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
                    <div class="col-xs-4"><a href="/casino-properties/"><h2 style="margin-top:3rem;">Casino Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/e2biz-properties/"><h2 style="margin-top:3rem;">E2Biz Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/entertainment-properties/"><h2 style="margin-top:3rem;">Entertainment Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/rental-properties/"><h2 style="margin-top:3rem;">Rental Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/resort-properties/"><h2 style="margin-top:3rem;">Resort Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/mega-city-properties/"><h2 style="margin-top:3rem;">Mega City Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/expo-city-properties/"><h2 style="margin-top:3rem;">Expo City Properties</h2></a></div>
                    <div class="col-xs-4"><a href="/resource-districts-properties/"><h2 style="margin-top:3rem;">Resource Districts Properties</h2></a></div>

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