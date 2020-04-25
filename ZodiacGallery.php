<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
<h2>Zodiac Gallery</h2>
<?php
    $ImageArray = array("Rat.jpg"=>"Rat", "Ox.jpg"=>"Ox", "Tiger.jpg"=>"Tiger", "Rabbit.jpg"=>"Rabbit", 
    "Dragon.jpg"=>"Dragon", "Snake.jpg"=>"Snake", "Horse.jpg"=>"Horse", "Ram.jpg"=>"Ram", "Monkey.jpg"=>"Monkey", 
    "Rooster.jpg"=>"Rooster", "Dog.jpg"=>"Dog", "Pig.jpg"=>"Pig");
    foreach($ImageArray as $link => $name) {
        echo "<a href='Images/$link'><img src='Images/$link' alt='$name' height='50px' width='50px' /></a>&emsp;";
    }
    echo "\n";
?>