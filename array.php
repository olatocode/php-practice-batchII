<?php


$Niit = array("Students","Faculty","counsellors","HR", 25);

// echo $Niit[0] . "<br>";
// echo $Niit[1] . "<br>";
// echo $Niit[2] . "<br>";
// echo $Niit[3] . "<br>";
// echo $Niit[4] . "<br>";
// echo print_r($Niit);

// write a programme on how you spend ur weekend in two words
// fetch the output, one at each and at once.

// Numeric Arrays
$myWeekend = array("Awesome", "Blissful");
// echo $myWeekend[0] . "<br>";
// echo $myWeekend[1] . "<br>";
// echo print_r($myWeekend);

// Associative Arrays
$Blenco = array("snacks" => 2000, "Bread" => 1500, "Toiletries" => 10000);

// echo $Blenco["snacks"] . "<br>";
// echo $Blenco["Bread"] . "<br>";
// echo $Blenco["Toiletries"] . "<br>";
// echo print_r($Blenco);

// Multidimensional Arrays

$profile = array(
"myWeekend" => array("awesome", "Blissful"),
"snacks" => array(2000),
"bread" => array(1500),
"toiletries" => array(10000),
);

// echo $profile["myWeekend"][0] . "<br>";
// echo $profile["myWeekend"][1] . "<br>";
// echo $profile["snacks"][0] . "<br>";
// echo print_r($profile);


// Data type null and operators

// $x = 50;
// $y = 0;
// $x--;
// $result = $x + $y;
// print $result;

// conditional statements
$age = 20;
if ($age < 18) {
    echo "You are not eligible to vote in Nigeria";
} elseif ($age == 18) {
    echo "You are eligible to vote in Nigeria";
} else {
    echo "I don't know it you are eligible or not! ";
}


?>