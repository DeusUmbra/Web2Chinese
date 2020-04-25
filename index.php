<?php 
    include("Includes/inc_site_counter.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
        <title>Index</title>
    </head>
    <body>
        <header>
        <?php
            include("Includes\inc_header.php");
        ?>
        </header>
        <div class="flex">
        <div class="button">
        <?php
            include("Includes\inc_button_nav.php");
        ?>
        </div>
        <div class="dynamic">
        <?php
            //include("Includes\inc_home.php"); //Old content
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'site_layout':
                        include("Includes/inc_site_layout.php");
                        break;
                    case 'control_structures':
                        include("Includes/inc_control_structures.php");
                        break;
                    case 'string_functions':
                        include("Includes/inc_string_functions.php");
                        break;
                    case 'web_forms':
                        include("Includes/inc_web_forms.php");
                        break;
                    case 'midterm_assessment':
                        include("Includes/inc_midterm_assessment.php");
                        break;
                    case 'state_information':
                        include("Includes/inc_state_information.php");
                        break;
                    case 'final_project':
                        include("Includes/inc_final_project.php");
                        break;
                    case 'home_page':
                        //Not sure why this is here since it is just to display the default anyway.
                    default:
                        include("Includes/inc_home.php");
                        break;
                }
            }
            else //If no buttons have been selected, display default page.
                include("Includes/inc_home.php");
        ?>
        </div>
        <div class="blank"></div>
        </div>
        <footer>
        <?php
            include("Includes\inc_footer.php");
        ?>
        </footer>
    </body>
</html>