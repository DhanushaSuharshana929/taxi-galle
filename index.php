<?php
///header('location: /cgi-sys/suspendedpage.cgi');

include_once(dirname(__FILE__) . '/class/include.php');

$EXCURSION = new Excursion(Null);
$excursions = $EXCURSION->all();

$ACTIVITY = New Activities(Null);
$activities = $ACTIVITY->all();



$COMMENT = New Comments(Null);
$comments = $COMMENT->all();

$sliders = Slider::all();
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title>Taxi Galle | Sri Lanka Travel Services | Airport Transfer | Hotel Transfer</title>
        <meta content="" name="author">
        <meta name="description" content="Holiday is a dream and we know it We, the team BONVOYAGELANKA travel crew is privileged to show you and to take you around the most beautiful island in the world.">
        <meta content="Bonvoyage Lanka, Sri Lanka Travel Services, Airport Transfer, Hotel Transfer, Bonvoyage, Tour Packages in Sri Lanka, Activities in Sri Lanka, Attractions in Sri Lanka, Tourism Transport, Sri Lanka Tour Packages, Sri Lanka Holiday Tours, Sri Lanka Holiday Trip, Tours in Sri Lanka, Sri Lanka Round Tours, Sri Lanka Tour Sites, Visit Sri Lanka, Tour Sites" name="keywords">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

        <!-- favicon -->
        <link href="img/favicon1.png" rel="icon" sizes="32x32" type="image/png">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- font themify CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- font awesome CSS -->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- date picker CSS -->
        <link href="css/datepicker.min.css" rel="stylesheet">
        <!-- revolution slider css -->
        <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
        <!-- on3step CSS -->
        <link href="css/animated-on3step.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/on3step-style.css" rel="stylesheet">
        <link href="css/queries-on3step.css" media="all" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="contact-home/style.css" rel="stylesheet" type="text/css"/>

        <style>
            .sec-active{
                padding: 25px 0 90px 0;
            }   
        </style>
    </head>

    <body>

        <!-- preloader -->
        <div class="bg-preloader-white"></div>
        <div class="preloader-white">
            <div class="mainpreloader">
                <span></span>
            </div>
        </div>
        <!-- preloader end -->

        <!-- content wraper -->
        <div class="content-wrapper">

            <!-- Header -->
            <?php
            include 'header.php';
            ?>
            <!-- /Header -->

            <!-- home -->
            <div id="home">
                <!-- Slider -->
                <?php
                include 'slider.php';
                ?>
                <!-- /Slider -->
            </div>
            <!-- home end -->


            <!-- section service home -->
            <section class="frm-clean ">
                <div class="container-fluid">
                    <div class="row">


                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="feature-1">
                                <div class="cont-img">
                                    <img alt="img-cont" class="img-responsive" src="img/service-1.jpg">
                                </div>
                                <div class="cont-detail">
                                    <h3 class="big-heading"><span class="color">Taxi Service</span></h3>
                                    <p class="max-char">Looking for a reliable hotel transfer to or from your hotel or to the city? 
                                        At Bonvoyage Lanka, we offer low-cost airport taxis across the globe, including holiday & resort. Our drivers are our best a...</p>
                                    <div class="star-content color">
                                    </div>
                                    <div class="btn-center">
                                        <a href="view-taxi.php" class="btn-content">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="feature-1">
                                <div class="cont-img">
                                    <img alt="img-cont" class="img-responsive" src="img/service-2.jpg">
                                </div>
                                <div class="cont-detail">
                                    <h3 class="big-heading"><span class="color">Tour Arrangement</span></h3>
                                    <p class="max-char">We provide our tourists with travel services. We rent cabs and other vehicles as 
                                        needed to accommodate the travel of strangers. Provides travel information and city information 
                                        about our places to visit, hotels to stay in, and public markets...</p>
                                    <div class="star-content color">
                                    </div>
                                    <div class="btn-center">
                                        <a href="view-tour.php" class="btn-content">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section service home end -->

            <!--  top rated --> 
            <section aria-label="top-rated" class="parallax ">
                <div class="container-fluid m-5-hor">
                    <!-- section about -->
                    <section id="about-us-1" class="whitepage no-padding">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="image-container autoheight-1 col-lg-6 hidden-md hidden-sm hidden-xs pull-left onStep" data-animation="fadeInLeft" data-time="0"></div>

                                <div class="col-lg-6 autoheight-1">
                                    <div class="p-90">
                                        <h3 class="big-heading space-title">
                                            <span class="first">Perfect</span> Place For Vacation
                                            <span class="devider-cont"></span>
                                        </h3>          

                                        <p class="intro">              
                                            <i>“Holiday is a dream and we know it”</i>

                                            We, the team BONVOYAGELANKA travel crew is privileged to show you and to
                                            take you around the most beautiful island in the world.
                                            It obvious that Sri Lanka is well known for its amazing diversity of cultures, the
                                            natural beauty of the landscape and a glorious history dating back over 2500
                                            years..... </p> 
                                        <a class="" href="about.php">View More >></a>
                                    </div>   
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- section about end -->

                    <!-- section about -->
                    <section id="about-us-2" class="no-padding whitepage">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="image-container autoheight-2 col-lg-6 hidden-md hidden-sm hidden-xs pull-right onStep" data-animation="fadeInRight" data-time="0"></div>

                                <div class="col-lg-6 autoheight-2">
                                    <div class="p-90">
                                        <h3 class="big-heading space-title">
                                            <span class="first">About</span> Our Service
                                            <span class="devider-cont"></span>
                                        </h3>

                                        <p class="intro">
                                            Numerous firms and agencies have merged to cater the need of
                                            transportation, but we definitely would try to make our customer delight by
                                            offering and outstanding service by being a team who always go extra mile to
                                            exceed the expectation of our guest.....</p>
                                        <a class="" href="about.php">View More >></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- section about end -->
                </div>
            </section>  
            <!--  top rated end --> 
            <section aria-label="gallery">
                <div class="container-fluid m-5-hor">
                    <div class="row">

                    </div>
                </div>
                <h2 class="big-heading topic-dark topic"><span class="first">Best Tour Packages</span> In Sri Lanka</h2>
                <div class="attraction-slider">
                    <div class="onStep" data-animation="fadeInUp" data-time="0">
                        <div id="owl-gal" class="owl-carousel">

                            <?php
                            foreach ($excursions as $excursion) {
                                ?>
                                <div class="item">
                                    <div class="gal-home gal-home1">
                                        <a href="#"></a>
                                        <div class="hovereffect">
                                            <img alt="imageportofolio" class="img-responsive" src="upload/attraction/<?php echo $excursion['image_name'] ?>" />
                                        </div>
                                        <div class="gal-home-content">
                                            <div class="row">
                                                <div class="col-md-12"> 
                                                    <h4 class=""><?php echo $excursion['title']; ?></h4>
                                                    <p class="para-tours"><?php echo substr($excursion['short_description'], 0, 74) . '...'; ?></p>
                                                    <span class="btn-center">
                                                        <center><a href="view-excursion.php?id=<?php echo $excursion["id"]; ?>" class="btn-content1">Read More</a></center>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gal-home gal-home2">
                                        <a href="#"></a>
                                        <div class="hovereffect">
                                            <img alt="imageportofolio" class="img-responsive" src="upload/attraction/<?php echo $excursion['image_name'] ?>" />
                                        </div>
                                        <div class="gal-home-content">
                                            <div class="row">
                                                <div class="col-md-12"> 
                                                    <h4 class=""><?php echo $excursion['title']; ?></h4>
                                                    <p class="para-tours"><?php echo substr($excursion['short_description'], 0, 85) . '...'; ?></p>
                                                    <span class="btn-center">
                                                        <center><a href="view-excursion.php?id=<?php echo $excursion["id"]; ?>" class="btn-content1">Read More</a></center>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </section> 

            <!--  section excursion --> 


            <!-- testimony --> 
            <section id="testimony" class="no-padding">
                <div class="container-fluid testimonial-sec">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 autoheight">

                            <div class="p-90">
                                <h2 class="big-heading topic-dark"><span class="first">Customer</span> Testimonials</h2>
                                <div id="owl-testimonial" class="owl-carousel owl-theme">

                                    <?php
                                    foreach ($comments as $comment) {
                                        ?>
                                        <div class="item">
                                            <blockquote>
                                                <p><?php echo $comment['comment']; ?></p>

                                            </blockquote>
                                            <div class="img-back">
                                                <img alt="imagetesti" class="tal" src="upload/comments/<?php echo $comment['image_name'] ?>" />
                                            </div>
                                            <h3><?php echo $comment['name']; ?></h3>
                                            <h5><?php echo $comment['title']; ?></h5>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>
            <!-- testimony end -->
            <!--  section attraction end --> 

            <?php
            include 'footer.php';
            ?>
            <!-- /Slider -->


            <!-- ScrolltoTop -->
            <div id="totop" class="init">
                <span class="ti-angle-up"></span>
            </div>  

            <!-- modal login -->
            <div id="fLogin" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">      
                            <h4 class="modal-title">Member Log In</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" required="required">         
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block btn-lg" value="Log In">
                                </div>
                            </form>       

                        </div>
                        <div class="modal-footer">
                            <a href="#">or Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal login end -->

            <!-- modal registration -->
            <div id="fsignUp" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">      
                            <h4 class="modal-title">Member Registration</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                                </div>
                                <div class="form-group"><input type="submit" value="Sign up" class="btn btn-primary btn-block btn-lg"></div>
                                <div class="clearfix"></div>
                            </form>       

                        </div>
                        <div class="modal-footer">
                            <a href="#">or Log In</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal registration end -->      


        </div>

        <script src="plugin/pluginson3step.js"></script> 
        <script src="plugin/bootstrap.min.js"></script>
        <script src='plugin/bootstrap-datepicker.min.js'></script>
        <script src="plugin/sticky.js"></script> 
        <!-- slider revolution  -->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!-- on3step JS -->
        <script src="js/on3step.js"></script>
        <script src="js/plugin-set.js"></script>
        <script src="contact-home/scripts.js" type="text/javascript"></script>
        <script>
            $(window).load(function () {
                var width = $(window).width();

                if (1365 < width > 1279) {
                    $('.gal-home2').removeClass('hidden');
                    $('.gal-home1').addClass('hidden');
                } else {
                    $('.gal-home1').removeClass('hidden');
                    $('.gal-home2').addClass('hidden');
                }

            });

        </script>

    </body>
</html>