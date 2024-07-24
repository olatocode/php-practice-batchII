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


class User {
    var $name;
    var $id;
    var $skills;

    function __construct($name, $id, $skills) {
        $this->name = $name;
        $this->id = $id;
        $this->skills = $skills;
    }

    static function displayInfo($user) {
        echo "My name is " . $user->name . ". My Id is " . $user->id . ". My skill is " . $user->skills . ".";
    }
}

$user = new User("Tobi", 1, "Backend");
User::displayInfo($user);

class User {
    public $name;
    public $id;
    public $skills;

    function __construct($name, $id, $skills) {
        $this->name = $name;
        $this->id = $id;
        $this->skills = $skills;
    }

    static function displayInfo($user) {
        echo "My name is " . $user->name . ". My Id is " . $user->id . ". My skill is " . $user->skills . ".";
    }
}

$user = new User("Tobi", 1, "Backend");
 User::displayInfo($user);



// $user1 = new User();
// $user1-> name = "Tobi";
// $user1-> id = 1;
// $user1-> skills = "Backend";

// echo $user1->name . "<br>";
// echo $user1->id . "<br>";
// echo $user1->skills . "<br>";





?>