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
    <title>Heuze Productions</title>
    <meta name="Description" content="Heuze Productions is providing full web development services. I focus on website UI, Web App, website optimization, ADA compliant, loading time and SEO engineering.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://heuzeproductions.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Heuze Productions" />
    <meta property="og:description" content="Heuze Productions is providing full web development services. I focus on website UI, Web App, website optimization, ADA compliant, loading time and SEO engineering." />
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
                <h1 class="line1">Web Development Services</h1>
                <p class="line2"><strong>Heuze Productions</strong> is providing <span>full web development</span> services. I focus on website UI, Web App, website optimization, ADA compliant, loading time and SEO engineering.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="contact-box">
                    <h2>Let's Discuss your Project</h2>
                    <ul>
                        <li><a href="https://discord.gg/Vf2Brvq" rel="noopener" target="_blank"><img src="/img/icons8-discord-50.<?=$fileTypePng;?>" width="50" height="50" alt="" /></a></li>
                        <!--<li><a href="#contact"><img src="/img/icons8-email-open-50.png" width="50" height="50" alt="" /></a></li>-->
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
                            <p><strong>Other Skills:</strong> I am also an indie game developer in Unity3D/Construct 3 and a 3D Animator/Modeler in Blender3D.</p>
                            <p>Looking forward to work on your projects.</p>
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
                    <div class="col-12 col-md-6 text-side"><p>Some Tools I use while working on your projects:</p></div>
                    <div class="col-12 col-md-6 icon-side">
                        <ul>
                            <li><a href="https://trello.com" rel="noopener" target="_blank"><img src="/img/icons8-trello-96.<?=$fileTypePng;?>" width="50" height="50" alt="Trello" /></a></li>
                            <li><a href="https://www.google.com/drive/" rel="noopener" target="_blank"><img src="/img/icons8-google-96.<?=$fileTypePng;?>" width="50" height="50" alt="GDrive" /></a></li>
                            <li><a href="https://discordapp.com/" rel="noopener" target="_blank"><img src="/img/Discord-Logo-Color.<?=$fileTypePng;?>" width="50" height="50" alt="Discord App" /></a></li>
                            <li><a href="https://www.godaddy.com/" rel="noopener" target="_blank"><img src="/img/go-daddy.<?=$fileTypePng;?>" width="35" height="50" alt="Godaddy" /></a></li>
                            <li><a href="https://www.twitch.tv/spectrum3900" rel="noopener" target="_blank"><img src="/img/twitch-purple-icon-logo-vector.<?=$fileTypePng;?>" width="50" height="50" alt="Twitch" /></a></li>
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
                    <div class="col-12 col-md-4"><h2>Services</h2></div>
                    <div class="col-12 col-md-8">
                        <p>In this section - I provide a break down of my services and skills with relevant examples. I made all those projects from idea brainstorming to coding. I will also include past/current clients showcase.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Full Responsive Website</h3>
                                <div class="icon responsive"></div>
                            </div>
                            <div class="each-service-box">
                                <a href="/portfolio/website-wolf-app.php" title="Responsive Wolf Pack App">
                                    <div class="wolf-app format-<?=$fileTypeCss;?>">
                                        <h4>Responsive Wolf Pack App</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Email Design &amp; Coding</h3>
                                <div class="icon email"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>WordPress Development</h3>
                                <div class="icon wp"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Animated Banners or Ads</h3>
                                <div class="icon ads"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Mini-Site &amp; Landing Pages</h3>
                                <div class="icon landing"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Web and Mobile Accessibility</h3>
                                <div class="icon ada"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Google Lighthouse Optimization</h3>
                                <div class="icon opti"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Web App Prototyping</h3>
                                <div class="icon proto"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php /**
    <div id="contact" class="block-contact pic">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12"><h2>Start Your Project Today</h2></div>
                </div>
                <div class="block-form">

                    <form id="contact-form">
                        <div class="form-group">
                            <label for="InputName">Full Name or Gamertag</label>
                            <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Email</label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Message</label>
                            <textarea class="form-control" id="InputMessage" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Send</button>
                    </form>
                    <div class="msgSent">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Message Sent</h4>
                            <p>We will get back to you as soon as we can.</p>
                            <p>We are looking forward to work with you.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="block-testimonials">
        <div class="container">
            <div class="block-cont">

            </div>
        </div>
    </div>
    **/ ?>

    <?php include "./includes/footer.php"; ?>

</main>
<?php include "./includes/scripts.php"; ?>
<script type="text/javascript">
</script>
</body>
</html>