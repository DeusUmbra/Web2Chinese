<hr />
<?php
    /*
    $Proverbs = file("proverbs.txt");
    $ProverbCount = count($Proverbs);
    echo "<div class='footer'>";
    echo "<p>A randomly displayed Chinese proverb from a text file:</p>";
    echo "<p>" . $Proverbs[rand(0, $ProverbCount-1)] . "</p>";
    */
    echo "<div class='footer'>";
    echo "<p>A randomly displayed Chinese proverb from a database:</p>";
    include("Includes/inc_connect.php");

    $countResult = mysqli_query($DBConnect, "SELECT count(*) FROM randomproverb");
    $count = mysqli_fetch_row($countResult);
    $SQL_String = "SELECT proverb FROM randomproverb WHERE proverb_number=". rand(1, $count[0]);
    $Result = mysqli_query($DBConnect, $SQL_String);
    $proverb = mysqli_fetch_row($Result);
    echo "<p>".$proverb[0]."</p>";

    $SQL_String = "UPDATE randomproverb SET display_count=display_count+1 WHERE proverb = '$proverb[0]'";
    mysqli_query($DBConnect, $SQL_String);

    $Images = scandir("./Images");
    $Dragons = preg_grep('/^Dragon\d+\.(gif|jpg|png)$/', $Images);
    shuffle($Dragons);
    echo "<img src='./Images/$Dragons[0]' alt='Dragon'/>";
    echo "<p>Total visitors to this site: " . $visitors . "</p>";
    echo "</div>";
?>
<table width="100%" style="border: 0">
<tr>
<td class="foot" style="text-align: right">&copy; 2019</td>
</tr>
</table>