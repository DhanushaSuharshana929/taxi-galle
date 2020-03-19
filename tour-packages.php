<?php
include_once(dirname(__FILE__) . '/class/include.php');

$TOUR_PACKAGE = new TourPackage(Null);
$tour_packages = $TOUR_PACKAGE->all();
?>

<!DOCTYPE html>
<html lang="zxx">
    
    <head>
        <meta charset="utf-8">
        <title>Round Tours | Taxi Galle</title>
        <meta content="" name="author">
        <meta name="description" content="Holiday is a dream and we know it We, the team BONVOYAGELANKA travel crew is privileged to show you and to take you around the most beautiful island in the world..">
        <meta content="tour packages in sri lanka, travel packages, package tours, holidays, sri lanka tour packages, sri lanka tours<?php foreach ($tour_packages as $tour_package){ echo ','. $tour_package['title'];}?>" name="keywords">
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

            <!-- subheader -->
            <section id="subheader">
                <div class="container-fluid m-5-hor">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="big-heading">
                                Round Tours
                            </h1>
<!--                            <p>Varius blandit sit amet</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <!-- section -->
            <section aria-label="section-blog" id="content">
                <div class="container-fluid m-5-hor">
                    <div class="row">

                        <!-- right content -->
                        <div class="col-md-12"> 
                            <div class="row">

                                <?php
                                foreach($tour_packages as $tour_package){
                                ?>
                                <div class="col-md-6 col-lg-3">
                                    <div class="gal-home">
                                        <a href="#"></a>
                                            <div class="hovereffect">
                                                <img alt="imageportofolio" class="img-responsive" src="upload/tour-package/<?php echo $tour_package['image_name'] ?>">
                                            </div>
                                            <div class="gal-home-content">
                                                <div class="row">
                                                    <div class="col-md-12"> 
                                                        <h4 class="autoheight"><?php echo $tour_package['title']; ?></h4>
                                                        <p class="para-tours"><?php echo substr($tour_package['short_description'], 0, 75) . '...'; ?></p>
                                                        <span class="readmore-span">
                                                            <center><a href="view-tour-packages.php?id=<?php echo $tour_package["id"];?>" class="btn-content2">View Package</a></center>
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
                        <!-- right content end -->

                    </div>
                </div>
            </section>
            <!-- section end -->

            <!-- footer -->
            <?php
            include 'footer.php';
            ?>
            <!-- footer end -->


            <!-- ScrolltoTop -->
            <div id="totop" class="init">
                <span class="ti-angle-up"></span>
            </div>  

        </div>
        <!-- content wraper end --> 

        <!-- plugin JS -->
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
    </body>
</html>