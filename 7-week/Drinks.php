<?php

class Drinks
{
    protected $cup;

    protected $water;

    protected $sugar;

    protected $name;

    protected $price;

    protected $data;


    public function setSugar($sugar)
    {
        $this->sugar = $sugar;
    }

    public function setCup($size)
    {
        $this->cup = $size;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
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