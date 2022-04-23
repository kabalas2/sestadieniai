<?php

class Calculator
{
    public $a;

    public $b;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function add($b)
    {
        $this->a = $this->a + $b;
        return $this;
    }


    public function minus($b)
    {
        $this->a = $this->a - $b;
        return $this;
    }

    public function multiple($b)
    {
        $this->a = $this->a * $b;
        return $this;
    }

    public function divide($b)
    {
        $this->a = $this->a / $b;
        return $this;
    }

    public function getA(){
        return $this->a;
    }

    public function squere()
    {
        $this->multiple($this->a);
        return $this;
    }
}