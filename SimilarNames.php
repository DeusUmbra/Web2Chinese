<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
        <title>Similar Names</title>
    </head>
    <body>
        <h1>Similar Names</h1><hr   />
        <?php
            $SignNames = array( "Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");
            $LevenshteinSmallest = 999999;
            $SimilarTextLargest = 0;

            for ($i=0; $i<11; ++$i) {
                for ($j=$i+1; $j<12; ++$j) {
                    $LevenshteinValue = levenshtein($SignNames[$i], $SignNames[$j]);
                    if ($LevenshteinValue < $LevenshteinSmallest) { 
                        $LevenshteinSmallest = $LevenshteinValue; 
                        $LevenshteinWord1 = $SignNames[$i]; 
                        $LevenshteinWord2 = $SignNames[$j]; 
                    } 
                    $SimilarTextValue = similar_text($SignNames[$i], $SignNames[$j]);
                    if ($SimilarTextValue > $SimilarTextLargest) { 
                        $SimilarTextLargest = $SimilarTextValue; 
                        $SimilarTextWord1 = $SignNames[$i]; 
                        $SimilarTextWord2 = $SignNames[$j]; 
                    } 
                }
            }
            echo "<p>The levenshtein() function has determined that &quot;$LevenshteinWord1&quot; and &quot;$LevenshteinWord2&quot; are the most similar names.</p>\n";
            echo "<p>The similar_text() function has determined that &quot;$SimilarTextWord1&quot; and &quot;$SimilarTextWord2&quot; are the most similar names.</p>\n";
        ?>
        <a href="index.php?page=string_functions">Return to Index</a>
    </body>
</html>