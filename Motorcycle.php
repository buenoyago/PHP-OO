<?php

require_once("Vehicle.php");

class Motorcycle extends Vehicle
{
    public function __construct($brand = null,$color = null)
    {
    /*$this->brand = $brand;
    $this->color = strtoupper($color);*/
        parent::__construct($brand,strtoupper($color));
    
        //echo $this->color;
    }
    public function getBrand()
    {
        return $this->brand;
    }
}