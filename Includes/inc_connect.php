<?php
    $db_name="chinese_zodiac";
    //assign the connection and selected database to a variable
    $DBConnect = mysqli_connect("localhost", "root", "", $db_name);
    if ($DBConnect === FALSE)
        echo "<p>Unable to connect to the database server.</p><p>Error code ". mysql_errno() . ": " . mysql_error() . "</p>";
    else {
        //select the database
        $db = mysqli_select_db($DBConnect, $db_name);
        if ($db === FALSE) {
            echo "<p>Unable to connect to the database.</p><p>Error code ". mysql_errno() . ": " . mysql_error() . "</p>";
            mysqli_close($DBConnect);
            $DBConnect = FALSE;
        }
    }
?>