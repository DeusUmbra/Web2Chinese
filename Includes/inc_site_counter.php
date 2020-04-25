<?php
    include("Includes/inc_connect.php");

    if (empty($_COOKIE['visits'])) {
        mysqli_query($DBConnect, "UPDATE visit_counter SET counter = counter + 1 WHERE id = 1");
        $queryResult = mysqli_query($DBConnect, "SELECT counter FROM visit_counter WHERE id = 1");
        if (($row = mysqli_fetch_assoc($queryResult)) !== NULL) 
            $visitors = $row['counter'];
        else
            $visitors = 1;
        setcookie("visits", $visitors, time()+(60*60*24));
    }
    else {
        $visitors = $_COOKIE['visits'];
    }
?>