<?php

// Trait

trait Logger
{
	public function log($msg)
	{
		echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg;
	}
}



class Car {

    use Logger;
    public $maker;
    public $model;

    public function __construct ($maker, $model){
        $this->maker = $maker;
        $this->model = $model;
    }

    public function displayInfo(){
        echo "My maker is " . $this->maker . " and my model is " . $this->model . $this->log('Car displayed');
    }
}


$car = new Car('Toyota', '2024');
$car->displayInfo();







?>