<?php

// Basic of class

class Student 
{   
    // properties
    public $name;
    public $age;
    public $course;
    public $skill;

    //  default function that enables the pro
    public function __construct($name, $age, $course, $skill)
    {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        $this->skill = $skill;
    }

    // custom function to create logic for the class
     public function displayInfo(){
         echo "My name is " . $this->name . "I'm " . $this->age . "years old" . " My course is "
          . $this->course . "and my skill is " . $this->skill;
     }
  
}

// $students = new Student("Tobi", 18, "PHP", "Backend");

// $students->displayInfo();


// class User {
//     var $name;
//     var $id;
//     var $skills;

//     function __construct($name, $id, $skills) {
//         $this->name = $name;
//         $this->id = $id;
//         $this->skills = $skills;
//     }

//     static function displayInfo($user) {
//         echo "My name is " . $user->name . ". My Id is " . $user->id . ". My skill is " . $user->skills . ".";
//     }
// }

// $user = new User("Tobi", 1, "Backend");
// User::displayInfo($user);

// class User {
//     public $name;
//     public $id;
//     public $skills;

//     function __construct($name, $id, $skills) {
//         $this->name = $name;
//         $this->id = $id;
//         $this->skills = $skills;
//     }

//     static function displayInfo($user) {
//         echo "My name is " . $user->name . ". My Id is " . $user->id . ". My skill is " . $user->skills . ".";
//     }
// }

// $user = new User("Tobi", 1, "Backend");
//  User::displayInfo($user);



// $user1 = new User();
// $user1-> name = "Tobi";
// $user1-> id = 1;
// $user1-> skills = "Backend";

// echo $user1->name . "<br>";
// echo $user1->id . "<br>";
// echo $user1->skills . "<br>";

include './logger.php';
 
class Vehicle {

    use copy;

    public $maker;
    public $model;

    public function __construct ($maker, $model){
        $this->maker = $maker;
        $this->model = $model;
    }

    public function displayV(){
        echo "My maker is " . $this->maker . " and my model is " . $this->model . $this->copyCode('Car displayed');
    }
}

 class Car extends Vehicle {
     public $color;
     public function __construct($maker, $model, $color){
        $this->maker = $maker;
        $this->model = $model;
        $this->color = $color;
     }
      
     public function displayInfo(){
        $this->displayV();
        echo "My color is " . $this->color;
     }

 }

 $car = new Car("Toyota", "Corolla", "Black");
 $car->displayInfo();

//  $car = new Vehicle("BMW", "2024");
//  $car->displayV();





?>