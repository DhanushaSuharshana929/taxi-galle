<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $ONE_DAY_TOUR_PACKAGE = new OneDayTourPackage(NULL);
    $VALID = new Validator();

    $ONE_DAY_TOUR_PACKAGE->title = $_POST['title'];
    $ONE_DAY_TOUR_PACKAGE->price = $_POST['price'];
    $ONE_DAY_TOUR_PACKAGE->short_description = $_POST['short_description'];
    $ONE_DAY_TOUR_PACKAGE->description = $_POST['description'];

    $dir_dest = '../../upload/one-day-tour-package/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ONE_DAY_TOUR_PACKAGE->image_name = $imgName;

    $VALID->check($ONE_DAY_TOUR_PACKAGE, [
        'title' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $ONE_DAY_TOUR_PACKAGE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-one-day-tour-date.php?id=" . $ONE_DAY_TOUR_PACKAGE->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
//    $result = $ONE_DAY_TOUR_PACKAGE->create();
//    if ($result) {
//        header("location: ../create-tour-package.php?id=" . $ONE_DAY_TOUR_PACKAGE->id . "&&message=10");
//    } else {
//        
//    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/one-day-tour-package/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ONE_DAY_TOUR_PACKAGE = new TourPackage($_POST['id']);

    $ONE_DAY_TOUR_PACKAGE->image_name = $_POST['oldImageName'];
    $ONE_DAY_TOUR_PACKAGE->title = $_POST['title'];
    $ONE_DAY_TOUR_PACKAGE->price = $_POST['price'];
    $ONE_DAY_TOUR_PACKAGE->short_description = $_POST['short_description'];
    $ONE_DAY_TOUR_PACKAGE->description = $_POST['description'];


    $VALID = new Validator();

    $VALID->check($ONE_DAY_TOUR_PACKAGE, [
        'title' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $ONE_DAY_TOUR_PACKAGE->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        
        $ONE_DAY_TOUR_PACKAGE = TourPackage::arrange($key, $img);
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}