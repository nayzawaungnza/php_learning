<?php
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}
//Has 3 of Access Modifier : public , private, protected
class Car{
    // public static function startEngine(){//static method not allow use for $this keyword
    //     echo "Car Start Engine.<br>";
    //     return new Car;
    // }
    protected $carName;
    public function __construct($carName)
    {
        $this->carName=$carName;
    }
    private function drive(){
        echo "$this->carName is driving.<br>";
    }
    public function getDrive(){
        $this->drive();
    }
    // public function stop(){
    //     echo "Car stopped.<br>";
    // }
    // public function whatisthis(){
    //     return $this;
    // }
}
//Car::startEngine()->drive()->stop();//for used static function

$car = new Car("KIA");
$car->getDrive();
//$car->stop();
//print_r($car->whatisthis()->stop());