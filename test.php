<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
$package = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_GET['package'])) {
    $package = $_GET['package'];
}

$TOUR_PACKAGE = new TourPackage(Null);
$tour_packages = $TOUR_PACKAGE->all();

?>


<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title>Booking | Taxi Galle</title>
        <meta content="" name="author">
        <meta name="description" content="Holiday is a dream and we know it We, the team BONVOYAGELANKA travel crew is privileged to show you and to take you around the most beautiful island in the world..">
        <meta content="booking tour packages, booking,book now, tour packages, inquiry now, Enquiry now, tour packages booking" name="keywords">
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
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
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
                                Inquiry Form
                            </h1>
<!--                            <p>Perfect Place for Vacation</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <section aria-label="contact" class="whitepage">
                <div class="container-fluid m-5-hor">
                    <div class="row">

                        <div class="col-md-12">
                            <div id="form-contact1">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label>Your Name<span class="red">*</span></label>
                                        <input type="text" name="txtName" id="txtName" class="form-control input-validater" value="" placeholder="Your Name">
                                        <span id="spanName"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your Email<span class="red">*</span></label>
                                        <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater" value="" placeholder="Your Email">
                                        <span id="spanEmail"></span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label>Arrival Date<span class="red">*</span></label>
                                        <input type="text" name="txtArrival" class="form-control input-validater" id="datepicker" value="" placeholder="Arrival Date">
                                        <span id="spanArrival"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Departure Date<span class="red">*</span></label>
                                        <input type="text" name="txtDeparture" class="form-control input-validater" id="datepicker1" value="" placeholder="Departure Date">
                                        <span id="spanDeparture"></span>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label>Tour Package<span class="red">*</span></label>
                                        <select name="tour_package" id="tour_package" class="form-control input-validater">
                                            <option value="">Select Tour Package</option>
                                            
                                            //<?php
//                                                        foreach ($tour_packages as $tour_package){
//                                            ?>
                                            <option value="//<?php echo $id; ?>" <?php if($tour_package === ['id']) {echo 'selected="TRUE"'; } ?>><?php echo $tour_package['title']; ?></option>
                                            //<?php
//                                                        }
//                                            ?>
                                            
                                            <option value="03 Days Beach Tour"<?php if($package == 1) {echo 'selected="TRUE"'; } ?>>03 Days Beach Tour</option>
                                            <option value="05 Days Beach Tour"<?php if($package == 2) {echo 'selected="TRUE"'; } ?>>05 Days Beach Tour</option>
                                            <option value="07 Days Beach Tour"<?php if($package == 3) {echo 'selected="TRUE"'; } ?>>07 Days Beach Tour</option>
                                            <option value="04 Days Cultural Tour"<?php if($package == 4) {echo 'selected="TRUE"'; } ?>>04 Days Cultural Tour</option>
                                            <option value="05 Days Cultural Tour"<?php if($package == 5) {echo 'selected="TRUE"'; } ?>>05 Days Cultural Tour</option>
                                            <option value="07 Days Cultural Tour"<?php if($package == 6) {echo 'selected="TRUE"'; } ?>>07 Days Cultural Tour</option>
                                            <option value="03 Days Surfing Tour"<?php if($package == 7) {echo 'selected="TRUE"'; } ?>>03 Days Surfing Tour</option>
                                            <option value="06 Days Surfing Tour"<?php if($package == 8) {echo 'selected="TRUE"'; } ?>>06 Days Surfing Tour</option>
                                            <option value="07 Days Discover Sri Lanka Tour"<?php if($package == 9) {echo 'selected="TRUE"'; } ?>>07 Days Discover Sri Lanka Tour</option>
                                            <option value="07 Days Surfing and Cultural Tour"<?php if($package == 10) {echo 'selected="TRUE"'; } ?>>07 Days Surfing and Cultural Tour</option>
                                            <option value="10 Days Sri Lanka Round Tour"<?php if($package == 11) {echo 'selected="TRUE"'; } ?>>10 Days Sri Lanka Round Tour</option>
                                            <option value="Adventurous Tours"<?php if($package == 12) {echo 'selected="TRUE"'; } ?>>Adventurous Tours</option>
                                        </select>
                                        <span id="spanPackage"></span>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label>Number of Adults<span class="red">*</span></label>
                                        <input type="text" name="txtAdults" class="form-control input-validater" id="txtAdults" value="" placeholder="Number of Adults">
                                        <span id="spanAdults"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Number of Children<span class="red">*</span></label>
                                        <input type="text" name="txtChildren" id="txtChildren" class="form-control input-validater" value="" placeholder="Number of Children">
                                        <span id="spanChildren"></span>
                                    </div>
                                </div>
                                <div class="form-group user-message">
                                    <label>Message</label>
                                    <textarea name="txtMessage" id="txtMessage" class="form-control input-validater" placeholder="Your Message"></textarea>
                                </div>                                  

                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label for="comment" id="form-label">Security Code:<span class="red">*</span></label>
                                        <input type="text" name="captchacode" id="captchacode" class="form-control" placeholder="Security code >> ">
                                        <span id="capspan" ></span>
                                    </div>
                                    <div class="col-md-6"> 
                                        <label></label>
                                        <span><?php include("./booking-form/captchacode-widget.php"); ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" id="btnSubmit" class="btn-contact">Send Now</button>
                                    </div>
                                </div>

                                <div class="col-md-4 input-margin">
                                    <div class="div-check" >
                                        <img src="booking-form/img/checking.gif" id="checking"/>
                                    </div> 
                                </div>

                                <div id="dismessage"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

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
        <script src="booking-form/scripts.js" type="text/javascript"></script>

        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>
        <script>
            $(function () {
                $("#datepicker1").datepicker();
            });
        </script>

    </body>
</html>