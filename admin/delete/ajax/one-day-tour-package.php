<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $ONE_DAY_TOUR_PACKAGE = new OneDayTourPackage($_POST['id']);
  
    $result =  $ONE_DAY_TOUR_PACKAGE->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}