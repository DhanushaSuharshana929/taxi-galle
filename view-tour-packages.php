<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$TOUR_PACKAGE = new TourPackage($id);
$TOUR_DATE = new TourDate(NULL);

$tour_packages = $TOUR_PACKAGE->all();
$tour_dates = $TOUR_DATE->getTourDatesById($id);
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title><?php echo $TOUR_PACKAGE->title; ?> | Taxi Galle</title>
        <meta content="" name="author">
        <meta name="description" content="Holiday is a dream and we know it We, the team BONVOYAGELANKA travel crew is privileged to show you and to take you around the most beautiful island in the world..">
        <meta content="tour packages in sri lanka, travel packages, package tours, holidays, sri lanka tour packages, sri lanka tours<?php foreach ($tour_packages as $tour_package){ echo ','.$tour_package['title'];}?>" name="keywords">
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
        <link href="fancybox-master/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
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
                                <?php echo $TOUR_PACKAGE->title; ?>
                            </h1>
<!--                            <p>Varius blandit sit amet</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <!-- services -->
            <section class="services whitepage">
                <div class="container-fluid m-5-hor">
                    <div class="row">
                        <div class="col-md-9">
                            <?php
                            foreach ($tour_dates as $tour_date) {
                                ?>
                                <div class="row">

                                    <div class="col-md-12 onStep" data-animation="fadeInUp" data-time="300">
                                        <h2 class="big-heading">
                                            Day <span class="color"><?php echo $tour_date['title']; ?></span>
                                        </h2>
                                        <hr/>
                                        <p>
                                            <?php echo $tour_date['description']; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-margin">

                                        <?php
                                        $photos = TourDatePhoto::getTourDatePhotosById($tour_date['id']);
                                        foreach ($photos as $key => $photo) {
                                            if ($key < 4) {
                                                ?>
                                                <div class="col-md-3 image">
                                                    <div class="projects-grid onStep img-top" data-animation="fadeInUp" data-time="0">
                                                        <a class="" href="upload/tour-package/date/gallery/<?php echo $photo['image_name']; ?>" data-fancybox="images">
                                                            <div class="middle">
                                                                <i class="fa fa-search"></i>
                                                            </div>
                                                            <img src="upload/tour-package/date/gallery/thumb/<?php echo $photo['image_name']; ?>" alt="" class=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            <span class="">
                                <center><a href="booking.php?id=<?php echo $TOUR_PACKAGE->id; ?>" class="btn-content">Inquiry Now</a></center>
                            </span>
                            
                            
                        </div>

                        <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="600">
                            <div class="widget">
                                <ul id="services-list">
                                    <li>
                                        <h5 class="topic-package">Other Tour Packages</h5>
                                    </li>
                                    <?php
                                    foreach ($tour_packages as $tour_package) {
                                        ?>
                                        <li class="">
                                            <a href="view-tour-packages.php?id=<?php echo $tour_package["id"]; ?>"><?php echo $tour_package['title']; ?></a>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- services end -->     

            <!---Footer--->
            <?php
            include 'footer.php';
            ?>
            <!---/Footer--->


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
        <script src="fancybox-master/js/jquery.fancybox.min.js" type="text/javascript"></script>
    </body>

</html>