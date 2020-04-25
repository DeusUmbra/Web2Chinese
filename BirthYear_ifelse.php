<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
<h3>Find out your Zodiac animal!</h3>
<form method="GET" action="BirthYear_ifelse.php">
<p>Enter your Birth Year here: <input type="number" name="year" min="1900" max="2020" required/></p>
<input type="submit" name="check" value="Check the Year"/>
</form>
<?php
    if (isset($_GET['check'])) {
        $Year = ($_GET['year'] - 1900) % 12;
        $OGYear = $_GET['year'];
        if ($Year == 0) {
            echo "<p>You were born under the sign of the Rat.</p>";
            echo "<img src='Images/Rat.jpg' alt='Rat'>";
        }
        if ($Year == 1) {
            echo "<p>You were born under the sign of the Ox.</p>";
            echo "<img src='Images/Ox.jpg' alt='Ox'>";
        }
        if ($Year == 2) {
            echo "<p>You were born under the sign of the Tiger.</p>";
            echo "<img src='Images/Tiger.jpg' alt='Tiger'>";
        }
        if ($Year == 3) {
            echo "<p>You were born under the sign of the Rabbit.</p>";
            echo "<img src='Images/Rabbit.jpg' alt='Rabbit'>";
        }
        if ($Year == 4) {
            echo "<p>You were born under the sign of the Dragon.</p>";
            echo "<img src='Images/Dragon.jpg' alt='Dragon'>";
        }
        if ($Year == 5) {
            echo "<p>You were born under the sign of the Snake.</p>";
            echo "<img src='Images/Snake.jpg' alt='Snake'>";
        }
        if ($Year == 6) {
            echo "<p>You were born under the sign of the Horse.</p>";
            echo "<img src='Images/Horse.jpg' alt='Horse'>";
        }
        if ($Year == 7) {
            echo "<p>You were born under the sign of the Ram.</p>";
            echo "<img src='Images/Ram.jpg' alt='Ram'>";
        }
        if ($Year == 8) {
            echo "<p>You were born under the sign of the Monkey.</p>";
            echo "<img src='Images/Monkey.jpg' alt='Monkey'>";
        }
        if ($Year == 9) {
            echo "<p>You were born under the sign of the Rooster.</p>";
            echo "<img src='Images/Rooster.jpg' alt='Rooster'>";
        }
        if ($Year == 10) {
            echo "<p>You were born under the sign of the Dog.</p>";
            echo "<img src='Images/Dog.jpg' alt='Dog'>";
        }
        if ($Year == 11) {
            echo "<p>You were born under the sign of the Pig.</p>";
            echo "<img src='Images/Pig.jpg' alt='Pig'>";
        }

        $Counter = 1;
        if (file_exists("Statistics/" . $OGYear . "Counter.txt")) {
            $Counter = (int)file_get_contents("Statistics/" . $OGYear . "Counter.txt");
            $Counter++;
            file_put_contents("Statistics/" . $OGYear . "Counter.txt", $Counter);
        }
        else {
            file_put_contents("Statistics/" . $OGYear . "Counter.txt", '1');
        }

        echo "<p>You are visitor number $Counter to enter $OGYear.</p>";
    }
?>
<a href="index.php?page=control_structures">Return to Index</a>