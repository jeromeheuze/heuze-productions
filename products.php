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
    <title>Products | Heuze Productions</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/products.php" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Products | Heuze Productions" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive." />
    <meta property="og:url" content="https://heuzeproductions.com/products.php" />
    <meta property="og:site_name" content="Products | Heuze Productions" />
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

<?php include "./includes/header.php"; ?>

<div class="banner full pic format-<?=$fileTypeCss;?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1 class="line1">Virtual businesses in the Metaverse</h1>
                <p class="line2"><strong>Heuze Productions</strong> is building several <span>in-game services</span> for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive.</p>
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
    <div class="block-metaverse">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h2>Current Metaverse we love!</h2>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <div class="col"><img src="/img/metaverse/metaverse_logo_roblox.png" alt="Roblox" width="120" height="120" /></div>
                            <div class="col"><img src="/img/metaverse/metaverse_logo_decentraland.png" alt="Decentraland" width="120" height="120" /></div>
                            <div class="col"><img src="/img/metaverse/metaverse_logos_earth2.png" alt="Earth2.io" width="120" height="120" /></div>
                            <div class="col"><img src="/img/metaverse/metaverse_logo_entropia.png" alt="Entropia Universe" width="120" height="120" /></div>
                            <div class="col"><img src="/img/metaverse/metaverse_logo_secondlife.png" alt="Second Life" width="120" height="120" /></div>
                            <div class="col"><img src="/img/metaverse/metaverse_logo_thesandbox.png" alt="Core Games" width="120" height="120" /></div>
                            <div class="col"><img src="/img/metaverse/metaverse_logo_wolf3d.png" alt="Ready Player me" width="120" height="120" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-hi" id="About">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="hi-right">
                            <div class="book" style="margin: 5vh auto;width: 300px;">
                                <div class="thebook" style="position: relative;width:294px;height:440px;">
                                    <a href="https://www.amazon.com/dp/B096TTQHQZ" target="_blank"><img src="/img/cover-1.png" alt="book cover" style="width:294px;height: 440px;margin: 0 auto;border: 1px solid #ccc;"></a>
                                    <div class="ribbon"><span>Sold on AMZ</span></div>
                                </div>
                                <h3>Earth2 Tile Planner: Design and Plan your E2 Tiles</h3>
                                <p><strong>$6.99</strong></p>
                                <p>Paperback – June 9, 2021</p>
                                <p>Have you bought some tiles in Earth2 and have some ideas to write down? Use our well-designed planner where you can see top and isometric view of your building as you draw them.</p>
                                <p><a href="https://www.amazon.com/dp/B096TTQHQZ" target="_blank">BUY NOW</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="hi-right">
                            <div class="book" style="margin: 5vh auto;width: 300px;">
                                <div class="thebook" style="position: relative;width:294px;height:440px;">
                                    <a href="https://www.amazon.com/dp/B09BSZR2PD" target="_blank"><img src="/img/cover-2.png" alt="book cover" style="width:294px;height: 440px;margin: 0 auto;border: 1px solid #ccc;"></a>
                                    <div class="ribbon"><span>Sold on AMZ</span></div>
                                </div>
                                <h3>Entropia Universe Mining Log</h3>
                                <p><strong>$6.99</strong></p>
                                <p>Paperback – August 2, 2021</p>
                                <p>Mining is one of the many professions that can be done in Entropia Universe. The purpose of mining is to find Minerals (Ores) and Energy Matter (Enmatter) in the ground of calypso. To find them you will need a tool to locate and find deposits underground, and another tool for extracting said deposits to the surface. Use our mining logbook to keep track of your claims.</p>
                                <p><a href="https://www.amazon.com/dp/B09BSZR2PD" target="_blank">BUY NOW</a></p>
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