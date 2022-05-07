<?php

include_once 'HotDrinks.php';
include_once 'Db.php';
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
        $this->setName($data['name']);
        $this->calcPrice($data['size']);
        $this->data = $data;
    }


    private function calcPrice($size){
        if($size == 'xl'){
            $this->setPrice(3.2);
        }elseif('l'){
            $this->setPrice(2.8);
        }else{
            $this->setPrice(2.4);
        }
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
        $db = new DB();
        $data = json_encode($this->data);
        $sql = "INSERT INTO sales (price, data, date) VALUES ('$this->price','$data', NOW())";

//        echo $sql;
//        die();
        $pdo = $db->connect();

        $pdo->exec($sql);


        $html = '';
        $html .= '<div class="cup ' . $this->cup . '">';
        if ($this->milk != 0) {
            $milkClass = 'milk';
        } else {
            $milkClass = '';
        }
        $html .= '<div class="top ' . $milkClass . '"></div>';
        $html .= '<div class="name">'.$this->name.'</div>';
        $html .= '</div>';
        return $html;
    }


}