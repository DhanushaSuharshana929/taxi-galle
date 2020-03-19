<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$ACTIVITY = new Activities($id);

$activities = $ACTIVITY->all();
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title><?php echo $ACTIVITY->title; ?>  | Taxi Galle</title>
        <meta content="" name="author">
        <meta name="description" content="Holiday is a dream and we know it We, the team BONVOYAGELANKA travel crew is privileged to show you and to take you around the most beautiful island in the world..">
        <meta content="activities in bonvoyagelanka, bonvoyagelanka, surfing in sri lanka, sri lanka, hikkaduwa sri lanka, things to do in sri lanka, activities in sri lanka<?php
        foreach ($activities as $activity) {
            echo ',' . $activity['title'];
        }
        ?>" name="keywords">
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
<?php echo $ACTIVITY->title; ?>
                            </h1>
<!--                            <p>Varius blandit sit amet</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <!-- left content -->
            <section class="services whitepage">
                <div class="container-fluid m-5-hor">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-12 onStep" data-animation="fadeInUp" data-time="300">
                                    <div class="owl-carousel" id="projectsBig">

                                        <?php
                                        $photos = ActivitiesPhoto::getActivitiesPhotosById($ACTIVITY->id);
                                        foreach ($photos as $photo) {
                                            ?>
                                            <img alt="imgservices" class="img-responsive" src="upload/activity/gallery/thumb/<?php echo $photo['image_name']; ?>">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <h2 class="big-heading">
<?php echo $ACTIVITY->title; ?>
                                    </h2>

                                    <p>
<?php echo $ACTIVITY->description; ?>
                                    </p>
                                </div>
                            </div>
                            <span class="">
                                <center><a href="booking.php?id=<?php echo $ACTIVITY->id; ?>" class="btn-content">Inquiry Now</a></center>
                            </span>
                        </div>

                        <!-- left content end -->

                        <!-- right content -->
                        <!--                        <div class="col-md-4">
                                                    <aside>
                        
                                                         widget 
                                                        <div class="widget">
                                                            <h5>
                                                                One Day Tours
                                                            </h5>
                        
                                                            <div class="devider-widget">
                                                            </div>
                        
                                                            <div class="recent">
                        <?php
                        foreach ($activities as $key => $activity) {
                            if ($key < 10) {
                                ?>
                                                                                        <div>
                                                                                            <a href="view-one-day-tour-packages.php?id=<?php echo $activity["id"]; ?>">
                                                                                                <img alt="#" class="pull-left" src="upload/activity/<?php echo $activity['image_name'] ?>">
                                                                                            </a>
                                                                                            <h6>
                                                                                                <a href="view-one-day-tour-packages.php?id=<?php echo $activity["id"]; ?>"><?php echo $activity['title']; ?></a>
                                                                                            </h6>
                                        
                                                                                            <p><?php echo substr($activity['short_description'], 0, 70) . '...'; ?></p>
                                                                                        </div>
                                <?php
                            }
                        }
                        ?>
                                                            </div>
                                                        </div>
                                                         widget end 
                                                    </aside>
                                                </div>-->
                        <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="600">
                            <div class="widget">
                                <ul id="services-list">
                                    <li>
                                        <h5 class="topic-package">Other Tour Packages</h5>
                                    </li>
                                    <?php
                                    $other_activities = Activities::getOtherActivitiesWithoutThisID($id);
                                    if (count($other_activities) > 0) {
                                        foreach ($other_activities as $activity) {
                                            ?>
                                            <li class="">
                                                <a href="view-one-day-tour-packages.php?id=<?php echo $activity["id"]; ?>"><?php echo $activity['title']; ?></a>
                                            </li>
                                            <?php
                                        }
                                    } else {
                                        echo "<h6>There are no any other tour packages in the database.</h6>";
                                    }
                                    ?>

                                </ul>
                            </div>

                        </div>
                        <!-- right content end -->

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
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>

    </body>
</html>
