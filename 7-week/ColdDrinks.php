<?php
include_once 'Drinks.php';

class ColdDrinks extends Drinks
{
    protected $ice;

    public function __construct()
    {
        $this->water = 25;
    }

    public function setIce($ice)
    {
        $this->ice = $ice;
    }


}