<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
<table class="zodiac">
<?php
    $signs = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Ram", "Monkey", "Rooster", "Dog", "Pig");
    $count = 0;
    $year = 1912;
    echo "<tr>";
    while ($count < 12) {
        echo "<th>$signs[$count]<img src='Images/$signs[$count].jpg'></th>";
        $count++;
    }
    echo "</tr>";
    $count = 0;
    $year = 1912+$count;
    echo "<tr>";
    while ($year <= 2031) {
        echo "<td>";	
        echo "$year";
        echo "</td>";
        $year += 1;
        $count++;
        if ($count % 12 == 0) {
		    echo "</tr>";
			echo "<tr>";
        }
    }
    echo "</tr>";

?>
</table>
<a href="index.php?page=control_structures">Return to Index</a>