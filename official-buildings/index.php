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
    <title>Official Buildings | Heuze Productions - virtual business in Earth2.io and other Metaverse</title>
    <meta name="Description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/official-buildings/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions - virtual business in Earth2.io and other Metaverse" />
    <meta property="og:description" content="Heuze Productions is building several in-game services for avatars living inside E2. We want your stay in all our properties to be the best." />
    <meta property="og:url" content="https://heuzeproductions.com/official-buildings/" />
    <meta property="og:site_name" content="Heuze Productions - virtual business in Earth2.io and other Metaverse" />
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
                <h2 class="line1">Our Official Buildings</h2>
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
                            <h2>What are our Official Buildings on Earth2.io?</h2>
                            <p>Heuze Productions is committed to have dedicated land area where we will display our portfolio of virtual lands we own. You will be able to visit our offices and get to know what we have to offer in Earth2. We have selected specific virtual lands for your avatars and businesses. Prepared to be amaze by our creativity!</p>
                            
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

                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Official Buildings</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
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
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Office</h5>
                                <p class="card-text">Land Class: 2 - 20 tiles - Japan</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/0203e8ed-dc8d-48bc-9de2-c43ec2c0408e" target="_blank" class="btn btn-block btn-primary">View HQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🔬 Heuze Productions Research Lab</h5>
                                <p class="card-text">Land Class: 2 - 55 tiles - Brainers Town - Paradise</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/752626ce-bd69-4961-bc67-6d85ed272f02" target="_blank" class="btn btn-block btn-primary">View Lab</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - State1.io</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Djibouti</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://www.state1.io/" target="_blank" class="btn btn-block btn-primary">View Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - StarCity</h5>
                                <p class="card-text">Land Class: 2 - 25 tiles - Morocco</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/ac934688-6eef-48f5-a57d-d755e2cbbdf6" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Nyanga</h5>
                                <p class="card-text">Land Class: 2 - 29 tiles - Gabon</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/23bbbdcd-5424-4708-b272-47adb963ebbd" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Milne Bay</h5>
                                <p class="card-text">Land Class: 2 - 9 tiles - Papua New Guinea</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/39347287-fa70-4be6-8082-77bda8ddfd46" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Zigurat City</h5>
                                <p class="card-text">Land Class: 2 - 49 tiles - Western Sahara</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/76c66135-746a-42df-83cb-c1294a53049a" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Skye City</h5>
                                <p class="card-text">Land Class: 2 - 16 tiles - Papua New Guinea</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/0e82cacc-5ad6-48f3-a100-774e778c25c6" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Hippoland</h5>
                                <p class="card-text">Land Class: 2 - 16 tiles - Myanmar</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/fe13300b-b2a9-4bba-8283-dbe6aaca11c5" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Techopia - AK</h5>
                                <p class="card-text">Land Class: 2 - 34 tiles - North Macedonia</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/4b6f2bb7-aa52-4298-bc73-b4e98764e0ca" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Asgard - Tree of Life</h5>
                                <p class="card-text">Land Class: 2 - 28 tiles - Greenland</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/89f39755-a7b0-4ef8-a817-a896353bf5dd" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 HeuzeProductions Embassy - Celestis City</h5>
                                <p class="card-text">Land Class: 2 - 6 tiles - Nicaragua</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#thegrid/1a51dda9-4dac-47dc-875d-981e53ca4e1f" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - OSC</h5>
                                <p class="card-text">Land Class: 2 - 35 tiles - Slovakia</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/d29eaa80-a477-4031-8b3f-bf88b4c1a156" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - Portugal</h5>
                                <p class="card-text">Land Class: 2 - 30 tiles - Portugal</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/693e6f58-3c5d-47fc-94e8-9153328b8aab" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - Madara City</h5>
                                <p class="card-text">Land Class: 2 - 30 tiles - Cameroon</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/b7594398-28e6-4cc5-b46d-95a5a367f2b2" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - El Dorado</h5>
                                <p class="card-text">Land Class: 2 - 35 tiles - Trinidad and Tobago</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/103e91d8-5c7e-4514-8557-d730eb721cab" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - VR Retro World</h5>
                                <p class="card-text">Land Class: 2 - 15 tiles - Burundi</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/7298f30b-b928-4121-b61c-5f75f9466401" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - 80s Megacity</h5>
                                <p class="card-text">Land Class: 2 - 64 tiles - Bosnia Herzegovina</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/d967bb38-8881-4c45-954c-beebbcdf21fb" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - TERRACITY</h5>
                                <p class="card-text">Land Class: 2 - 36 tiles - Papua New Guinea</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/2ef5456c-4c51-48bb-8c49-0d02ac24c196" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - Gibraltar</h5>
                                <p class="card-text">Land Class: 2 - 42 tiles - Gibraltar</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/006b0d02-e85d-47fb-b9d8-94b038f56ba6" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">💡 Heuze Productions Embassy - MotorCity</h5>
                                <p class="card-text">Land Class: 2 - 25 tiles - Samoa</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/e929b154-3375-46b3-bd8b-b668cd5c4852" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-hprod-e2.jpg" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">📚 Virtual Campus - State1 - HeuzeProductions</h5>
                                <p class="card-text">Land Class: 2 - 31 tiles - Djibouti</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                    <a href="https://app.earth2.io/#propertyInfo/42c908fe-dc45-40f8-a44f-12eb81752449" target="_blank" class="btn btn-block btn-primary">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xs-12"><h2 style="margin-top:3rem;">Official Resources</h2></div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-woodlog-e2.jpg?v=001" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🪓 WoodLog, inc</h5>
                                <p class="card-text">579 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-agronomy-e2.jpg?v=001" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">🌾 Agronomy, inc</h5>
                                <p class="card-text">225 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-cuprum-e2.jpg?v=002" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">⛏ Cuprum, inc</h5>
                                <p class="card-text">962 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="card">
                            <img src="/img/e2/poster-sandexport-e2.jpg?v=001" class="card-img-top" alt="E2 Property">
                            <div class="card-body">
                                <h5 class="card-title">⏳ Sand Export, inc</h5>
                                <p class="card-text">59 tiles</p>
                                <div class="d-grid gap-2">
                                    <p>Coming Soon!</p>
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