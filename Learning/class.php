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

$students = new Student("Tobi", 18, "PHP", "Backend");

$students->displayInfo();







?>