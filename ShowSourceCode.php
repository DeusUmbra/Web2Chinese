<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Show Source Code</title>
    </head>
    <body>
        <?php
            if (isset($_GET['source_file'])) {
                $SourceFile = file_get_contents(stripslashes($_GET['source_file']));
                highlight_string($SourceFile);
            }
            else {
                echo "<p>No source file name entered.</p>\n";
            }
        ?>
    </body>
</html>