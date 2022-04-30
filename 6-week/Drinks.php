<?php

class Drinks
{
    protected $cup;

    protected $water;

    protected $sugar;


    public function setSugar($sugar)
    {
        $this->sugar = $sugar;
    }

    public function setCup($size)
    {
        $this->cup = $size;
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