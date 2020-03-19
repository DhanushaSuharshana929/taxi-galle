<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $EXCURSION_PHOTO = new ExcursionPhoto($_POST['id']);

    unlink(Helper::getSitePath() . "upload/excursion/gallery/" . $EXCURSION_PHOTO->image_name);
    unlink(Helper::getSitePath() . "upload/excursion/gallery/thumb/" . $EXCURSION_PHOTO->image_name);

    $result = $EXCURSION_PHOTO->delete();

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}