<?php
    session_start();
    require_once("class_EventCalendar.php");
    if (class_exists("EventCalendar")) { 
        if (isset($_SESSION['currentCalendar'])) 
            $Calendar = unserialize($_SESSION['currentCalendar']); 
        else { 
            $Calendar = new EventCalendar (); 
        }
    }
    else { 
        $Calendar = NULL;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
        <title>Event Details</title>
    </head>
    <body>
        <h1>Event Details </h1>
        <?php
            if ($Calendar === NULL)
                echo "<p>There was an error creating the EventCalendar object.</p>\n";
            else {
                if (!isset($_GET['EventID']))
                    $_GET['EventID'] = 1;
                $Calendar->getEventDetails($_GET['EventID']);
            }
        ?>
        <a href="index.php?page=final_project&PHPSESSID=<?php echo session_id(); ?>">View the event calendar</a>
    </body>
</html>