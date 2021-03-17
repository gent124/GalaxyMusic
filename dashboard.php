<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Galaxy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>
<!-- body -->

<body class="main-layout">
<!-- loader  && header -->
<?php
    session_start();
    require_once "config.php";

    include "inc/loader.php";
    include "inc/header.php";
    

?>

<section class="banner_section">
    <div class="banner-main">
        <img src="images/galaxy.jpg.jpg" />
        <div class="container">

            <div class="text-bg relative">
                <h1><br><span class="Perfect"><em>Hi, Welcome to GALAXY</em></h1>
                <p>Biggest music platform, worldwide, we provide you with the best music all around the world. Stay calm and enjoy GALAXY</p>
                <a href="album.php">Download Now</a>
            </div>

        </div>
    </div>

</section>

<!--  footer -->
<?php include "inc/musicbox.php"?>
<!-- end music-box  -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
            <div class="img-box">
                <figure><img src="images/musicbg.jpg" alt="img" /></figure>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
            <div class="text-box">
                <div class="box">
                    <i><img src="images/5.png"/></i>
                    <h3>MEET OUR Music STARS</h3>
                    <p>Eminem released the new album
                        <br>  Check Eminem's new Album! Music to be murdered now online in GALAXY. </p>
                    <a href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Download -->
<div id="screenshot" class="Lastestnews">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Latest News</h2>
                    <span> The new album release from EMINEM<br>  Check Eminem's new Album! Music to be murdered now online in GALAXY Albums-box.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                <div class="news-box">
                    <figure><img src="images/lisbon-3.jpg" alt="img" /></figure>
                    <h3>LISBON</h3>
                    <span> March 20</span><span>Comment</span>
                    <p> 2M+ listeners Monthly </p>
                    <p> 60+ top chefs </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                <div class="news-box">
                    <figure><img src="images/san-francisco.jpg" alt="img" /></figure>
                    <h3>SAN FRANCISCO</h3>
                    <span> March 20</span><span>Comment</span>
                    <p> 5M+ listeners Monthly </p>
                    <p>  160 radio stations </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Download -->

<!-- Albums -->
<div id="screenshot" class="Albums">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Albums-box </h2>
                    <span>  Worldwide music in one platform <br> Go check out the newest albums from your favorite artist </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                <div class="Albums-box">
                    <figure>
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                            <img src="images/album1.jpg" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                    </figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                <div class="Albums-box">
                    <figure>
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                            <img src="images/album2.jpg" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end Albums -->

<!-- Newsletter -->
<div class="Newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Newsletter</h2>
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
                        <input class="email" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
                        <button class="submit-btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end Newsletter -->

<!--  footer -->
<footr id="footer_with_contact">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>Contact Us</h3>
                        <ul class="locarion_icon">
                            <li><img src="icon/1.png" alt="icon" />10000, Prishtinë, XK</li>
                            <li><img src="icon/2.png" alt="icon" />Phone : ( +383 44 123 456 )</li>
                            <li><img src="icon/3.png" alt="icon" />Email : emri@gmail.com</li>


                        </ul>

                        <ul class="contant_icon">
                            <li><img src="icon/fb.png" alt="icon" /></li>
                            <li><img src="icon/tw.png" alt="icon" /></li>
                            <li><img src="icon/lin(2).png" alt="icon" /></li>
                            <li><img src="icon/instagram.png" alt="icon" /></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>Get In Touch</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Name" type="text" name="Name" required>
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Phone" type="text" name="Email" required>
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Email" type="text" name="Email" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message" required></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>New Music </h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music1.jpg" /></figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music2.jpg" /></figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music3.jpg" /></figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music4.jpg" /></figure>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>All stars are part of GALAXY</p>
            <p>© 2019 All Rights Reserved. <a href="#">Galaxy Inc.</a></p>

        </div>
    </div>
</footr>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
</body>

</html>