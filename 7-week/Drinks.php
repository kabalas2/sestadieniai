<?php

class Drinks
{
    protected $cup;

    protected $water;

    protected $sugar;

    protected $name;

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

    public function delivery()
    {
        $html = '';
        $html .= '<div class="cup '.$this->cup.'">';
        $html .= '<div class="top empty"></div>';
        $html .= '</div>';
        return $html;
    }
}