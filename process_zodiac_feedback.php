<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />

<?php
    include('Includes/inc_connect.php');
    date_default_timezone_set("America/Chicago");
    $db_table = "zodiacfeedback";
    $public;
    if (isset($_POST['public']))
        $public = "Y";
    else
        $public = "N";
    $message = $_POST['message'];
    $msg = str_replace("'", "\'", $message);
    $SQLstring = "INSERT INTO $db_table (message_date, message_time, sender, message, public_message) VALUES ('". date("Y-m-d") ."', '". date("h:i:s") .
        "', '". $_POST['name'] ."', '". $msg ."', '". $public ."')";
    $result = mysqli_query($DBConnect, $SQLstring);
    if ($result === FALSE)
        echo "Uh oh";
    else 
        echo "Thank you for submitting your feedback! Your comment was added to our database.";
?>