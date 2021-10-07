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
    <title>Metaverses | Heuze Productions</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/metaverse.php" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Metaverses | Heuze Productions" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive." />
    <meta property="og:url" content="https://heuzeproductions.com/metaverse.php" />
    <meta property="og:site_name" content="Metaverses | Heuze Productions" />
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
                <h2 class="line1">Virtual businesses in the Metaverse</h2>
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

    <div class="block-hi">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-group">
                            <div class="card">
                                <img src="/img/e2/poster-e2.jpg" class="card-img-top" alt="Earth2">
                                <div class="card-body">
                                    <h5 class="card-title">Earth2.io</h5>
                                    <p class="card-text">We are committed to provide great <a href="https://earth2.io/" rel="noreferrer" target="_blank">Earth2.io</a> entertainment and housing for the players. We have properties in megacities, we have vacation resorts, housing for sale and rent, several malls and shops and plenty of private beaches to enjoy and relax. We have a wonderful selection of properties around the world of Earth2. We are in a very early stage and Earth2 has a very promising future.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">476 Properties - <a href="https://app.earth2.io/#profile/85c750d8-93f6-4e71-bc53-1b7a509d7a75" target="_blank">Earth2 Profile</a></small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/img/e2/poster-afterearth.jpg" class="card-img-top" alt="AfterEarth">
                                <div class="card-body">
                                    <h5 class="card-title">AfterEarth.io</h5>
                                    <p class="card-text">We bought some virtual properties in <a href="https://afterearth.io/" rel="noreferrer" target="_blank">AfterEarth.io</a> to acquire some more properties like Northwestern Michigan College Campus; Bear River Casino Resort; ThunderValley Casino Resort; Graton Resort & Casino; Twin Pine Casino; Valley View Casino & Hotel; Red Hawk Casino; Konocti Vista Casino and Resort. We will see what we can do in the platform as it gets released.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><a href="https://afterearth.io/profile/spectrum3900" target="_blank">AfterEarth Profile</a></small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/img/e2/poster-mearth.jpg" class="card-img-top" alt="MetaEarth">
                                <div class="card-body">
                                    <h5 class="card-title">MetaEarth.io</h5>
                                    <p class="card-text">We invested into virtual properties in <a href="https://metaearth.io/" rel="noreferrer" target="_blank">MetaEarth.io</a> to acquire the following properties: Montage Deer Valley (Park City, Utah); Amangiri (Canyon Point, Southern Utah); Montage Palmetto Bluff (Bluffton, SC); Eau Palm Beach Resort & Spa (Palm Beach Island); Four Seasons Resort and Residences Vail (Vail, CO). Stay tuned to learn what we will build.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">2,702 Blocks</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-hi">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-group">
                            <div class="card">
                                <img src="/img/e2/poster-eu.jpg" class="card-img-top" alt="Entropia Universe">
                                <div class="card-body">
                                    <h5 class="card-title">Entropia Universe</h5>
                                    <p class="card-text">Entropia Universe is a Massive Multiplayer Online video game designed and maintained by Swedish software company MindArk. It was first released in 2003. Entropia uses micropayments business model where players can exchange currency into in-game currency called PED. The exchange rate has been fixed since the beginning at the rate of 10 PED:$1 USD.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">6 Properties - <a href="https://www.entropiauniverse.com/" target="_blank">Entropia Universe</a></small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/img/e2/eumarket-small.jpg" class="card-img-top" alt="EntropiaMarket">
                                <div class="card-body">
                                    <h5 class="card-title">EntropiaMarket</h5>
                                    <p class="card-text">At EntropiaMarket we provide a reference for understanding the historical worth of Estates deeds that are available in-game. We capture the prices in PED that auction issuers are willing to sell their digital properties. We also provide virtual visits of Properties for your viewing before buying or bidding. Know before buying the actual value of an estate.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><a href="https://entropiamarket.com/" target="_blank">EntropiaMarket</a></small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/img/e2/euhub-small.jpg" class="card-img-top" alt="EntropiaHub">
                                <div class="card-body">
                                    <h5 class="card-title">EntropiaHub</h5>
                                    <p class="card-text">Entropia Universe general information - filled with useful tools to help every entropian players. We also built in-game shop inventory search for Monria / Toulan for your convenience.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><a href="https://entropiahub.com/" target="_blank">EntropiaHub</a></small>
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