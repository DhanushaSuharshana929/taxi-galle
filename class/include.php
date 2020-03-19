<?php

include_once(dirname(__FILE__) . '/Setting.php');
include_once(dirname(__FILE__) . '/Helper.php');
include_once(dirname(__FILE__) . '/Upload.php');
include_once(dirname(__FILE__) . '/Database.php');
include_once(dirname(__FILE__) . '/User.php');
include_once(dirname(__FILE__) . '/Message.php');
include_once(dirname(__FILE__) . '/Validator.php');
include_once(dirname(__FILE__) . '/Service.php');
include_once(dirname(__FILE__) . '/ServicePhoto.php');
include_once(dirname(__FILE__) . '/TourPackage.php');
include_once(dirname(__FILE__) . '/TourDate.php');
include_once(dirname(__FILE__) . '/TourDatePhoto.php');
include_once(dirname(__FILE__) . '/Activities.php');
include_once(dirname(__FILE__) . '/ActivitiesPhoto.php');
include_once(dirname(__FILE__) . '/Excursion.php');
include_once(dirname(__FILE__) . '/ExcursionPhoto.php');
include_once(dirname(__FILE__) . '/PhotoAlbum.php');
include_once(dirname(__FILE__) . '/Comments.php');
include_once(dirname(__FILE__) . '/Slider.php');
include_once(dirname(__FILE__) . '/Page.php');
include_once(dirname(__FILE__) . '/Banner.php');
include_once(dirname(__FILE__) . '/TourPackagePhotosNormal.php');
include_once(dirname(__FILE__) . '/OneDayTourDatePhoto.php');
include_once(dirname(__FILE__) . '/OneDayTourPackage.php');

function dd($data) {
    var_dump($data);
    exit();
}
function redirect($url) {
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';

    echo $string;
    exit();
}
