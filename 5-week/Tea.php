<?php
include_once 'HotDrinks.php';
class  Tea extends HotDrinks
{

    private $tea;

    public function setTea($tea)
    {
        $this->tea = $tea;
    }

    public function delivery()
    {
        $html = '';
        $html .= '<div class="cup '.$this->cup.'">';
        $html .= '<div class="top '.$this->tea.'"></div>';
        $html .= '</div>';
        return $html;
    }

}