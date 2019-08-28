<?php
include "./includes/global.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Heuze Productions</title>
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
                        <li><a href="#Blog">Blog</a></li>
                        <li><a href="https://discord.gg/Vf2Brvq" target="_blank">Discuss on Discord</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="banner full pic">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1 class="line1">Web Development Services</h1>
                <p class="line2"><strong>Heuze Productions</strong> is providing full web development services like domain management, hosting services, SSL certificate management and web development for creating and customizing your digital properties.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="contact-box">
                    <h2>Let's Discuss your Project</h2>
                    <ul>
                        <li><a href="https://discord.gg/Vf2Brvq" target="_blank"><img src="/img/icons8-discord-50.png" width="50" height="50" alt="" /></a></li>
                        <li><a href="#contact"><img src="/img/icons8-email-open-50.png" width="50" height="50" alt="" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<main>

    <div class="block-hi">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="hi-left">
                            <h2>Hi, I'm Jerome Heuze</h2>
                            <p>I am Web Developer with 10 years of experience in start-up and big corporation from Silicon Valley. I live in California currently. I have experience in PHP, HTML5, CSS3, jQuery, WIX, Webflow, Wordpress Customization, print CSS, maintenance in regular websites and have maintained web properties with thousands of visitors daily. I am also an indie game developer  and 3D Cinematic Producer and 3D Animator.</p>
                            <p>Looking forward to work on your projects.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="hi-right">
                            <div class="hi-pic"></div>
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
                    <div class="col-12 col-md-6 text-side"><p>Some Tools we use while we work on your projects:</p></div>
                    <div class="col-12 col-md-6 icon-side">
                        <ul>
                            <li><a href="https://trello.com" target="_blank"><img src="/img/icons8-trello-96.png" width="50" height="50" alt="" /></a></li>
                            <li><a href="https://www.google.com/drive/" target="_blank"><img src="/img/icons8-google-96.png" width="50" height="50" alt="" /></a></li>
                            <li><a href="https://www.twitch.tv/" target="_blank"><img src="/img/Discord-Logo-Color.png" width="50" height="50" alt="" /></a></li>
                            <li><a href="https://www.godaddy.com/" target="_blank"><img src="/img/go-daddy.png" width="35" height="50" alt="" /></a></li>
                            <li><a href="https://www.twitch.tv/spectrum3900" target="_blank"><img src="/img/twitch-purple-icon-logo-vector.png" width="50" height="50" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-services">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12 col-md-4"><h2>Services</h2></div>
                    <div class="col-12 col-md-8">
                        <p>In this section - I provide a break down of my services and skills with relevant examples. All those projects are 100% made by myself unless specified.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="service-box">
                            <div class="title-box">
                                <h3>Full Responsive Website</h3>
                                <div class="icon responsive"></div>
                            </div>
                            <div class="row each-service-box">
                                <div class="col-12">
                                    <div class="title-related">
                                        <p class="lt">Related Projects</p>
                                        <p class="rt"><a href="#">View All</a></p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="thumb"></div>
                                    <p>Project Title</p>
                                    <p><a href="#">View All</a></p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="thumb"></div>
                                    <p>Project Title</p>
                                    <p><a href="#">View All</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6"></div>
                    <div class="col-12 col-md-6"></div>
                    <div class="col-12 col-md-6"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="block-contact">
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

    <footer>
        <div class="container">
            <div class="row block-cont">
                <div class="col-12 col-sm-4">
                    <div class="block-actions">
                        <h3>See Us In Action</h3>
                        <ul>
                            <li><a href="#"><img src="/img/icons8-discord-50.png" width="50" height="50" alt="" /></a></li>
                            <li><a href="#"><img src="/img/icons8-discord-50.png" width="50" height="50" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="block-totals">
                        <h3>Total Projects</h3>
                        <p>30</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="block-connect">
                        <h3>Connect With Us</h3>
                        <ul>
                            <li><a href="#"><img src="/img/icons8-discord-50.png" width="50" height="50" alt="" /></a></li>
                            <li><a href="#"><img src="/img/icons8-discord-50.png" width="50" height="50" alt="" /></a></li>
                            <li><a href="#"><img src="/img/icons8-discord-50.png" width="50" height="50" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 copy">
                    <p>&copy; <?=date("Y");?> - Heuze Productions</p>
                    <small><a href="https://icons8.com/" target="_blank">Icons from icons8.com</a></small>
                </div>
            </div>
        </div>
    </footer>

</main>
<?php include "./includes/scripts.php"; ?>
<script type="text/javascript">
</script>
</body>
</html>