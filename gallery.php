<?php
include_once(dirname(__FILE__) . '/class/include.php');

$PHOTO_ALBUM = new PhotoAlbum(Null);
$photo_albums = $PHOTO_ALBUM->all();      
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title>Gallery | Taxi Galle</title>
        <meta content="" name="description">
        <meta content="" name="author">
        <meta name="description" content="Holiday is a dream and we know it We, the team BONVOYAGELANKA travel crew is privileged to show you and to take you around the most beautiful island in the world..">
        <meta content="travel gallery, travel photos, tour photos, tour gallery, gallery srilanka, tour package gallery" name="keywords">
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
                                Gallery
                            </h1>
<!--                            <p>Varius blandit sit amet</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <!-- section projects -->
            <section aria-label="works" id="projects">
                <div class="container-fluid">
                    <div class="row">

                        <!-- project -->
                        <div class="v-align">
                            <div class="col-md-11 col-xs-12">

                                <div class="col-md-12"> 
                                    <div class="row">

                                        <?php
                                    foreach ($photo_albums as $photo_album) {
                                        ?>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="gal-home">
                                                <div class="w-gallery aus afr">
                                                    <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                                                        <div class="hovereffect-color">
                                                            <img src="upload/photo-album/thumb/<?php echo $photo_album['image_name'] ?>" alt="" class="w-gallery-image">
                                                            <div class="overlay">
                                                                <div class="v-align wrap">
                                                                    <span class="icon">
                                                                        <a class="" href="upload/photo-album/<?php echo $photo_album['image_name'] ?>" data-fancybox="images">
                                                                            <i class="fa fa-search"></i>
                                                                        </a> 
                                                                    </span>
                                                                </div>
                                                            </div>
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
                        </div>
                        <!-- project end -->

                    </div>
                </div>
            </section>
            <!-- section projects end -->

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