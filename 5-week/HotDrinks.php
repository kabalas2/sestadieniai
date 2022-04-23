<?php

class HotDrinks
{
    protected $water;

    protected $sugar;

    protected $cup;

    public function __construct()
    {
        $this->boilWater();
    }

    public function setSugar($sugar)
    {
        $this->sugar = $sugar;
    }

    public function setCup($size)
    {
        $this->cup = $size;
    }


    public function boilWater()
    {
        $this->water = 95;
    }

    public function delivery()
    {
        $html = '';
        $html .= '<div class="cup '.$this->cup.'">';
        $html .= '<div class="top empty"></div>';
        $html .= '</div>';
        return $html;
    }
}