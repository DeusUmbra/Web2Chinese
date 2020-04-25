<?php
    $banner_array = array("Images/banner1.png", "Images/banner2.png", "Images/banner3.png", "Images/banner4.png", "Images/banner5.png");
    $banner_count = count($banner_array);
    if (empty($_COOKIE['lastbanner'])) {
        $banner_index = rand(0, $banner_count-1);
    }
    else {
        $banner_index = $_COOKIE['lastbanner'];
        $banner_index = (++$banner_index) % $banner_count;
    }
    setcookie("lastbanner", $banner_index, time()+(60*60*24*7));
?>