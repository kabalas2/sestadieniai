<?php

include_once 'HotDrinks.php';

class Coffee extends HotDrinks
{
    private $beans;

    private $milk;

    private $syrup;

    private $marshmallouw;

    private $sprimles;

    public function __construct($data)
    {
        parent::__construct();
        $this->setCup($data['size']);
        $this->setMilk($data['milk']);
        $this->setSugar($data['sugar']);
    }

    public function setBeans($beans)
    {
        $this->beans = $beans;
    }

    public function setMilk($milk)
    {
        $this->milk = $milk;
    }

    public function setSyrup($syrup)
    {
        $this->syrup = $syrup;
    }

    public function setMarshMelow($marshmelow)
    {
        $this->marshmallouw = $marshmelow;
    }

    public function setSprimles($sprimles)
    {
        $this->sprimles = $sprimles;
    }


    public function delivery()
    {
        $html = '';
        $html .= '<div class="cup ' . $this->cup . '">';
        if ($this->milk != 0) {
            $milkClass = 'milk';
        } else {
            $milkClass = '';
        }
        $html .= '<div class="top ' . $milkClass . '"></div>';
        $html .= '</div>';
        return $html;
    }


}