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
    <title>Heuze Productions - virtual businesses in Metaverses</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual businesses in Metaverses" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive." />
    <meta property="og:url" content="https://heuzeproductions.com/" />
    <meta property="og:site_name" content="Heuze Productions - virtual businesses in Metaverses" />
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
            <div class="col-xs-12 col-md-8">
                <h2 class="line1">Virtual businesses in the Metaverse</h2>
                <p class="line2"><strong>Heuze Productions</strong> is building several <span>in-game services</span> for avatars living inside many Metaverse. We want your stay in all our properties to be the best. Convert your website into a 3D world and fully interactive.</p>
            </div>
            <div class="col-xs-12 col-md-4">
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
                    <div class="col-xs-12 col-md-12">
                        <h2>Current Metaverse we love!</h2>
                    </div>
                    <div class="col-xs-12 col-md-12">
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
                                    <small class="text-muted"><a href="https://app.earth2.io/#profile/85c750d8-93f6-4e71-bc53-1b7a509d7a75" target="_blank">Earth2 Profile</a> - Since Jan 2021</small>
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

    <div class="block-tools">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-side"><p>Some Tools I use while working on Earth2 Architecture:</p></div>
                    <div class="col-xs-12 col-md-6 icon-side">
                        <ul>
                            <li><a href="https://unity.com/" rel="noopener" target="_blank"><img src="/img/1200px-Unity_Technologies_logo.svg.png" height="50" alt="Unity3D" /></a></li>
                            <li><a href="https://www.blender.org/" rel="noopener" target="_blank"><img src="/img/1252px-Blender_logo_no_text.svg.png" height="50" alt="Blender3D" /></a></li>
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
                    <div class="col-xs-12 col-md-12">
                        <h2>Current properties we own.</h2>
                    </div>
                    <div class="col-xs-4"><a href="/official-buildings/"><h3 style="margin-top:3rem;">Official Buildings</h3></a></div>
                    <div class="col-xs-4"><a href="/casino-properties/"><h3 style="margin-top:3rem;">Casino Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/e2biz-properties/"><h3 style="margin-top:3rem;">E2Biz Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/entertainment-properties/"><h3 style="margin-top:3rem;">Entertainment Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/rental-properties/"><h3 style="margin-top:3rem;">Rental Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/resort-properties/"><h3 style="margin-top:3rem;">Resort Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/mega-city-pili-pala/"><h3 style="margin-top:3rem;">Pili-Pala Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/mega-city-cmc/"><h3 style="margin-top:3rem;">CMC Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/expo-city-properties/"><h3 style="margin-top:3rem;">Expo City Properties</h3></a></div>
                    <div class="col-xs-4"><a href="/resource-districts-properties/"><h3 style="margin-top:3rem;">Resource Districts Properties</h3></a></div>

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