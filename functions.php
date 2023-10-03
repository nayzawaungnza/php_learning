<?php
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}

class Car{
    public static function startEngine(){//static method not allow use for $this keyword
        echo "Car Start Engine.<br>";
        return new Car;
    }
    public function drive(){
        echo "Car is driving.<br>";
        return new Car;
    }
    public function stop(){
        echo "Car stopped.<br>";
    }
    public function whatisthis(){
        return $this;
    }
}
Car::startEngine()->drive()->stop();//for used static function

$car = new Car();
$car->drive();
$car->stop();
print_r($car->whatisthis()->stop());