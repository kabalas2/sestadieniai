<?php

include_once 'Drinks.php';

class HotDrinks extends Drinks
{

    public function __construct()
    {
        $this->boilWater();
    }


    public function boilWater()
    {
        $this->water = 95;
    }


}