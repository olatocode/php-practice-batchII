<?php


// data types
// $name = "Hello";
$number = 30;
$boolean = true;
$null = null;
$array = array("Hello", "World", "I", "am", "Tobi");
$object = new stdClass();

// conditional statements
// if ($number ==  20) {
//     echo  $number;
// }
// else {
//     echo "its false";
// }

// switch ($number) {
//     case 20:
//         echo $number;
//         break;

//     default:
//         echo "its false";
//         break;
//     }

    // function add($num1, $num2) {
    //     return $num1 + $num2;
    // }
  
    // echo add(5, 10);
     
    class Person {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function displayInfo() {
            echo "My name is " . $this->name . " and my age is " . $this->age;
        }
    }

    $myPerson = new Person("Tobi", 18);
    $myPerson->displayInfo();    
    // $myPerson->name = "Tobi";
    // $myPerson->age = 18;

    




?>