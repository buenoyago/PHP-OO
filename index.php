<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari","Red");
/*$ferrari->brand = "Ferrari";
$ferrari->color = "Red";*/
$ferrari->engine = 488;
$ferrari->setDoors(2);

$mustang = new Car("Mustang","Yellow"); 
/*$mustang->brand = "Mustang";
$mustang->color = "Yellow";*/
$mustang->engine = 300;
$mustang->setDoors(4);

$m = new Motorcycle("Honda","Blue");
/*$m->brand = "Honda";
$m->color = "Blue";*/
$m->engine = 150;


echo $ferrari->getBrand();


