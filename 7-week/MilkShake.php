<?php
include_once 'ColdDrinks.php';

class MilkShake extends ColdDrinks
{
    protected $icecream;

    protected $additives;

    protected $flave;

    public function __construct($data)
    {
        parent::__construct();
        $this->setCup($data['size']);
        $this->setFlave($data['flave']);
        $this->setSugar($data['sugar']);
        $this->setName($data['name']);
    }

    public function setIceCreams($iceScrems)
    {
        $this->icecream = $iceScrems;
    }

    public function setFlave($flave)
    {
        $this->flave = $flave;
    }

    public function setAdditives($additives)
    {
        $this->additives = $additives;
    }

    public function delivery()
    {
        $html = '';
        $html .= '<div class="cup transperent ' . $this->cup . '">';
        $html .= '<div class="top ' . $this->flave . '"></div>';
        $html .= '<div class="name">'.$this->name.'</div>';
        $html .= '</div>';
        return $html;
    }
}