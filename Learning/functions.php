<?php

// builtIn Functions

$course = ["php", "laravel", "react", "vue"];
// print_r(count($course));
array_pop($course);
array_push($course, "python", "Javascript");
// print_r($course);


// user define functions

function greet($name)
{
echo "Good morning," . $name . "<br>";
}
// greet("Tobi");

function addNum($num1, $num2){
    echo $num1 + $num2;
}

// addNum(5, 6);

function skills(){
 $course = ["php", "laravel", "react", "vue"];
 echo print_r($course);
}
// skills();



function calSales($price, $qty){
    $bread = 400;
    $tea = 200;
    if ($bread > 350) {
        $breadPrice = $price * $qty;
    
      if ($tea >= 200) {
            $teaPrice = $price * $qty;
            
        }
        $totalSales = $breadPrice + $teaPrice;
        echo $totalSales;
    }
    }

calSales(400, 2)





?>