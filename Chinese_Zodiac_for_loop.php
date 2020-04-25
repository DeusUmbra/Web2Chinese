<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
<table class="zodiac">
<?php
    $signs = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Ram", "Monkey", "Rooster", "Dog", "Pig");
    echo "<tr>";
    for($i = 0; $i < 12; $i++) {
        echo "<th>$signs[$i]<img src='Images/$signs[$i].jpg'></th>";
    }
    echo "</tr>";
    echo "<tr>";
    for($i = 0; $i<12; $i++) {
        echo "<td>";
        for($y = 1912+$i; $y <= 2031; $y += 12) {
            echo "$y ";
        }
        echo "</td>";
    }
    echo "</tr>";
?>
</table>
<a href="index.php?page=control_structures">Return to Index</a>