<?php
include_once 'HotDrinks.php';

class  Tea extends HotDrinks
{

    private $tea;

    public function __construct($data)
    {
        parent::__construct();
        $this->setCup($data['size']);
        $this->setSugar($data['sugar']);
        $this->setTea($data['tea']);
        $this->setName($data['name']);
    }

    public function setTea($tea)
    {
        $this->tea = $tea;
    }


    public function delivery()
    {
        $html = '';
        $html .= '<div class="cup ' . $this->cup . '">';
        $html .= '<div class="top ' . $this->tea . '"></div>';
        $html .= '<div class="name">'.$this->name.'</div>';
        $html .= '</div>';
        return $html;
    }


}