<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />

<?php
    include('Includes/inc_connect.php');
    $SQLString = "SELECT * FROM zodiacfeedback WHERE public_message = 1";
    $QueryResult = mysqli_query($DBConnect, $SQLString);

    echo "<table>\n";
    echo "<tr><th>Date</th><th>Time</th><th>Sender</th><th>Message</th><th>Public</th></tr>\n";
    while (($Row = mysqli_fetch_assoc($QueryResult)) !== null) {
        echo "<tr><td>{$Row['message_date']}</td>";
        echo "<td>{$Row['message_time']}</td>";
        echo "<td>{$Row['sender']}</td>";
        echo "<td>{$Row['message']}</td>";
        echo "<td>{$Row['public_message']}</td></tr>\n";
    }
    echo "</table>\n";
?>