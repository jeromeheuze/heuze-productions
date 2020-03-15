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
    <title>Heuze Productions - ElectronJS Web Development tutorials</title>
    <meta name="Description" content="Heuze Productions is providing full web development tutorials. I will focus on website UI, Desktop Web App, loading time using ElectronJS. I believe in a renaissance of Desktop applications - Let's code the future.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions" />
    <meta property="og:description" content="Heuze Productions is providing full web development tutorials. I will focus on website UI, Desktop Web App, loading time using ElectronJS. I believe in a renaissance of Desktop applications - Let's code the future." />
    <meta property="og:url" content="https://heuzeproductions.com/" />
    <meta property="og:site_name" content="Heuze Productions" />
    <meta property="og:image" content="https://heuzeproductions.com/img/sandeep-swarnkar-dm7M67VaEBc-unsplash-darker.jpg" />
    <meta property="og:image:secure_url" content="https://heuzeproductions.com/img/sandeep-swarnkar-dm7M67VaEBc-unsplash-darker.jpg" />
    <meta property="og:image:width" content="798" />
    <meta property="og:image:height" content="532" />
    <?php include "./includes/head.php"; ?>
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
                        <li><a href="#Services">Services</a></li>
                        <li><a href="https://discord.gg/Vf2Brvq" rel="noopener" target="_blank" title="Connect with me on Discord">Discuss on Discord</a></li>
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
                <h1 class="line1">ElectronJS Web Development tutorials</h1>
                <p class="line2"><strong>Heuze Productions</strong> is providing <span>full web development</span> tutorials. I will focus on website UI, Desktop Web App, loading time using ElectronJS. I believe in a renaissance of Desktop applications - Let's code the future.</p>
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
                            <h2>Hi, I'm Jerome Heuze</h2>
                            <p>I am a Web Developer with 14 years of experience in Freelancing, start-up and big corporation from Silicon Valley. I have experience in small and large projects completed on time. I have maintained web properties with thousands of visitors daily.</p>
                            <p><strong>Core Skills:</strong> PHP, HTML5, CSS3, SASS, GULP, MustachePHP, HandleBars, Git, Bitbucket, Javascript, Responsive, jQuery.</p>
                            <p><strong>Soft Skills:</strong> Etsy, WIX, Webflow, Wordpress 5.x, Optimizely X, Section 508, WAI, ADA Compliant.</p>
                            <p><strong>Other Skills:</strong> I am also an indie game developer in Unity3D/Construct 3 and an 3D Animator/Modeler in Blender3D.</p>
                            <p>Looking forward to teach you what I know.</p>
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
                    <div class="col-12 col-md-6 text-side"><p>Some Tools I use while working on projects:</p></div>
                    <div class="col-12 col-md-6 icon-side">
                        <ul>
                            <li><a href="https://trello.com" rel="noopener" target="_blank"><img src="/img/icons8-trello-96.<?=$fileTypePng;?>" width="50" height="50" alt="Trello" /></a></li>
                            <li><a href="https://www.google.com/drive/" rel="noopener" target="_blank"><img src="/img/icons8-google-96.<?=$fileTypePng;?>" width="50" height="50" alt="GDrive" /></a></li>
                            <li><a href="https://discordapp.com/" rel="noopener" target="_blank"><img src="/img/Discord-Logo-Color.<?=$fileTypePng;?>" width="50" height="50" alt="Discord App" /></a></li>
                            <li><a href="https://www.godaddy.com/" rel="noopener" target="_blank"><img src="/img/go-daddy.<?=$fileTypePng;?>" width="35" height="50" alt="Godaddy" /></a></li>
                            <li><a href="https://www.twitch.tv/spectrum3900" rel="noopener" target="_blank"><img src="/img/twitch-purple-icon-logo-vector.<?=$fileTypePng;?>" width="50" height="50" alt="Twitch" /></a></li>
                            <li><a href="https://www.electronjs.org/" rel="noopener" target="_blank"><img src="/img/200px-Electron_Software_Framework_Logo.svg.<?=$fileTypePng;?>" width="50" height="50" alt="Twitch" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-services" id="Services">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-4"><h2>Let's learn and code!</h2></div>
                    <div class="col-12 col-md-8">
                        <p>Build cross-platform desktop apps with JavaScript, HTML, and CSS.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Coming Soon!</h3>
                                <div class="icon responsive"></div>
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