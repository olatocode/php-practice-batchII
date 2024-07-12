<?php
// conditional statements
$age = 20;
if ($age < 18) {
    echo "You are not eligible to vote in Nigeria";
} elseif ($age == 18) {
    echo "You are eligible to vote in Nigeria";
} else {
    echo "I don't know it you are eligible or not! ";
}

$age = 18;
if($age != 18){
    echo 'you are stil a kid';

}elseif($age == 17){
    echo 'you are an adult';
}else {
    echo 'you are something else';
}
 echo '<br>';
 echo '<br>';
// switch statements
$Days = 7;
switch ($Days) {
      case 1:
      echo "Monday";
      break;

      case  2:
      echo "Tuesday";
      break;

      case 3:
      echo "Wednesday";
      break;

      case  4:
      echo "Thursday";
      break;

      case  5:
      echo "Friday";
      break;

     case  6:
      echo "Saturday";
      break;

      
     case  7:
      echo "Sunday";
      break;

      default: echo "its not part of the days";
      break;
}



?>