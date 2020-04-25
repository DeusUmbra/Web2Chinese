<link rel="stylesheet" type="text/css" href="ChinaStyle.css" />
<h3>Find out your Zodiac animal!</h3>
<form method="GET" action="BirthYear_switch.php">
<p>Enter your Birth Year here: <input type="number" name="year" min="1900" max="2020" required/></p>
<input type="submit" name="check" value="Check the Year"/>
</form>
<?php
    $AnimalSigns = array(
        "Rat"=>array("Start Date"=>1900, "End Date"=>2020, "President"=>"George Washington"),
        "Ox"=>array("Start Date"=>1901, "End Date"=>2021, "President"=>"Barack Obama"),
        "Tiger"=>array("Start Date"=>1902, "End Date"=>2022, "President"=>"Dwight Eisenhower"),
        "Rabbit"=>array("Start Date"=>1903, "End Date"=>2023, "President"=>"John Adams"),
        "Dragon"=>array("Start Date"=>1904, "End Date"=>2024, "President"=>"Abraham Lincoln"),
        "Snake"=>array("Start Date"=>1905, "End Date"=>2025, "President"=>"John Kennedy"),
        "Horse"=>array("Start Date"=>1906, "End Date"=>2026, "President"=>"Theodore Roosevelt"),
        "Ram"=>array("Start Date"=>1907, "End Date"=>2027, "President"=>"James Madison"),
        "Monkey"=>array("Start Date"=>1908, "End Date"=>2028, "President"=>"Harry Truman"),
        "Rooster"=>array("Start Date"=>1909, "End Date"=>2029, "President"=>"Grover Cleveland"),
        "Dog"=>array("Start Date"=>1910, "End Date"=>2030, "President"=>"George Walker Bush"),
        "Pig"=>array("Start Date"=>1911, "End Date"=>2031, "President"=>"Ronald Reagan")
    );

    if (isset($_GET['check'])) {
        $Year = ($_GET['year'] - 1900) % 12;
        $OGYear = $_GET['year'];
        $Sign = "";
        switch ($Year) {
            case 0:
                echo "<p>You were born under the sign of the Rat.</p>";
                echo "<img src='Images/Rat.jpg' alt='Rat'>";
                $Sign = "Rat";
                break;
            case 1:
                echo "<p>You were born under the sign of the Ox.</p>";
                echo "<img src='Images/Ox.jpg' alt='Ox'>";
                $Sign = "Ox";
                break;
            case 2:
                echo "<p>You were born under the sign of the Tiger.</p>";
                echo "<img src='Images/Tiger.jpg' alt='Tiger'>";
                $Sign = "Tiger";
                break;
            case 3:
                echo "<p>You were born under the sign of the Rabbit.</p>";
                echo "<img src='Images/Rabbit.jpg' alt='Rabbit'>";
                $Sign = "Rabbit";
                break;
            case 4:
                echo "<p>You were born under the sign of the Dragon.</p>";
                echo "<img src='Images/Dragon.jpg' alt='Dragon'>";
                $Sign = "Dragon";
                break;
            case 5:
                echo "<p>You were born under the sign of the Snake.</p>";
                echo "<img src='Images/Snake.jpg' alt='Snake'>";
                $Sign = "Snake";
                break;
            case 6:
                echo "<p>You were born under the sign of the Horse.</p>";
                echo "<img src='Images/Horse.jpg' alt='Horse'>";
                $Sign = "Horse";
                break;
            case 7:
                echo "<p>You were born under the sign of the Ram.</p>";
                echo "<img src='Images/Ram.jpg' alt='Ram'>";
                $Sign = "Ram";
                break;
            case 8:
                echo "<p>You were born under the sign of the Monkey.</p>";
                echo "<img src='Images/Monkey.jpg' alt='Monkey'>";
                $Sign = "Monkey";
                break;
            case 9:
                echo "<p>You were born under the sign of the Rooster.</p>";
                echo "<img src='Images/Rooster.jpg' alt='Rooster'>";
                $Sign = "Rooster";
                break;
            case 10:
                echo "<p>You were born under the sign of the Dog.</p>";
                echo "<img src='Images/Dog.jpg' alt='Dog'>";
                $Sign = "Dog";
                break;
            case 11:
                echo "<p>You were born under the sign of the Pig.</p>";
                echo "<img src='Images/Pig.jpg' alt='Pig'>";
                $Sign = "Pig";
                break;
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

        $SignMessage = "If your Chinese zodiac sign is the $Sign, you share a zodiac sign with President " . $AnimalSigns[$Sign]["President"] . ". ";
        $SignMessage .= "Years of the $Sign include ";
        for ($i = $AnimalSigns[$Sign]["Start Date"]; $i < $AnimalSigns[$Sign]["End Date"]; $i+=12) 
            $SignMessage .= $i . ", ";
        $SignMessage .= "and " . $AnimalSigns[$Sign]["End Date"] . ".";
        echo "<p>$SignMessage</p>";

        echo "<p>You are visitor number $Counter to enter $OGYear.</p>";
    }
?>
<a href="index.php?page=control_structures">Return to Index</a>