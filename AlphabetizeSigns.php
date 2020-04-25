<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
<h2>Chinese Zodiac Alphabetizer</h2>
<p>This program will take in the zodiac names you enter and alphabetize them for you after you submit them!</p>
<p>Please be sure to seperate the names with commas.</p>

<form method="get" action="AlphabetizeSigns.php">
    <p>Enter some of the Chinese Zodiac signs here: </p>
    <textarea name="input" rows="4" cols="50" required></textarea>
    <input type="submit" value="Done"/>
</form>

<?php
    $Signs = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Ram", "Monkey", "Rooster", "Dog", "Pig");
    if (isset($_GET["input"])) {
        $Input = explode(", ", $_GET["input"]);
        $CorrectInputs = array_intersect($Signs, $Input);
        $IncorrectInputs = array_diff($Input, $CorrectInputs);
        if (!empty($IncorrectInputs)) {
            echo "<p>Please only enter zodiac sign names. Here is a list of appropriate names:</p>";
            echo "<ul>";
            foreach($Signs as $Sign) echo "<li>$Sign</li>";
            echo "</ul>";
        }
        else {
            sort($Input);
            echo "<p>Here is your alphabetized list of signs:</p>";
            echo "<ol>";
            foreach($Input as $Sign) echo "<li>$Sign</li>";
            echo "</ol>";
        }
    }
?>
<a href="index.php?page=web_forms">Return to Index</a>