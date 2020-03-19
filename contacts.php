<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = '';
$activity = '';
$attraction = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_GET['activity'])) {
    $activity = $_GET['activity'];
}
if (isset($_GET['attraction'])) {
    $attraction = $_GET['attraction'];
}
?>

<!DOCTYPE html>
<html lang="zxx">

    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Contacts | Taxi Galle</title>
        <meta content="" name="author">
        <meta name="description" content="Holiday is a dream and we know it We, the team BONVOYAGELANKA travel crew is privileged to show you and to take you around the most beautiful island in the world..">
        <meta content="travel website contact numbers,contact travel websites in srilanka,contact bonvoyagelanka,contact sri lanka travel, sri lanka,bonvoyagelanka, tarvel, tourism, best travel agent, best tour operator in sri lanka, travel guide" name="keywords">
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
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
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
                                Contact Us
                            </h1>
<!--                            <p>Varius blandit sit amet</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <!-- section contact -->
            <section aria-label="contact" class="whitepage map-padding">
                <div class="container-fluid m-5-hor">
                    <div class="row">

                        <div class="col-md-8">
                            <div id="form-contact1" method="post">
                                <div class="row form-group form-group-bottom">
                                    <div class="col-md-6">
                                        <label>Your Name<span class="red">*</span></label>
                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater" value="" placeholder="Your Name">
                                        <span id="spanFullName"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your Email<span class="red">*</span></label>
                                        <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater" value="" placeholder="Your Email">
                                        <span id="spanEmail"></span>
                                    </div>
                                </div>
                                <div class="row form-group form-group-bottom">
                                    <div class="col-md-6">
                                        <label>Contact No<span class="red">*</span></label>
                                        <input type="text" name="txtContact" id="txtContact" class="form-control input-validater" value="" placeholder="Your Contact No">
                                        <span id="spanContact"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country<span class="red">*</span></label>
                                        <input type="text" name="txtCountry" id="txtCountry" class="form-control input-validater" value="" placeholder="Your Country">
                                        <span id="spanCountry"></span>
                                    </div>
                                </div>
                                <div class="row form-group form-group-bottom">
                                    <div class="col-md-12">
                                        <label>Subject<span class="red">*</span></label>
                                        <input type="text" name="txtSubject" id="txtSubject" class="form-control input-validater" value="" placeholder="Subject">
                                        <span id="spanSubject"></span>
                                    </div>
                                </div>
                                <div class="form-group user-message">
                                    <label>Message</label>
                                    <textarea name="txtMessage" id="txtMessage" class="form-control input-validater" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4 input-margin">
                                        <label for="comment" id="form-label">Security Code:<span class="red">*</span></label>
                                        <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Security code >> ">
                                        <span id="capspan" ></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php
                                        include ("./contact-form/captchacode-widget.php");
                                        ?>
                                        <img id="checking" src="contact-form/img/checking.gif" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="btnSubmit" class="btn-contact">Send Now</button>
                                </div>

                                <!--<div id="dismessage"></div>-->
                                <!--<div class="col-md-12 col-lg-12 contact-us-button">-->
                                <div id="dismessage" align="center" class="msg-success"></div>
                                <!--</div>-->

                            </div>
                        </div>

                        <!-- address -->
                        <div class="col-md-3 col-md-offset-1">
                            <h3 class="heading-cont">Contact Information</h3>
                            <address class="cont-1">
                                <span>
                                    No 03, Sri Dewamitha Road, Galle 80000</span> 
                                <span><strong>PHONE:</strong> +94 774 260 350</span> 
                                <span><img src="img/whatsapp.png" alt=""/>+94 777 788 363</span>
                                <span><img src="img/viber.png" alt=""/> +94 777 788 363</span>
                                <span><strong>EMAIL:</strong><a href="mailto:info@bonvoyagelanka.com"> info@galletaxi.com</a></span> 
                                <span><strong>WEB:</strong><a href="http://bonvoyagelanka.com/"> www.galletaxi.lk</a></span>
                            </address>
                        </div>
                        <!-- address end -->


                    </div>
                </div>
            </section>
            <!-- section contact end -->

            <!-- map -->
            <section aria-label="map" class="">
                <div class="container-fluid m-5-hor">
                    <div class="row">
                        <div id="map-1">
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0471342834253!2d79.8446867147747!3d7.235464194776872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2eeb4a1ab2359%3A0xacb395d0bea4d625!2sShramadana+Mawatha%2C+Negombo!5e0!3m2!1sen!2slk!4v1538097711944" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div> 
            </section> 
            <!-- map end -->

            <!-- Footer -->
            <?php
            include 'footer.php';
            ?>
            <!-- /Footer -->

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
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script  src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!--  map google  -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script> 
<!--        <script src="js/map-1.js" type="text/javascript"></script>-->
        <!-- on3step JS -->
        <script src="js/on3step.js"></script>
        <script src="js/plugin-set.js"></script>
        <script src="contact-form/scripts.js" type="text/javascript"></script>

    </body>

</html>
