<?php

include 'function.php';
include 'Calculator.php';

$a = 13;
$a = add($a, 5);
$a = add($a, 7);
$a = multiple($a, 3);
$a = minus($a, 4);
$a = divide($a, 2);
//echo $a;
//
//echo "\n";

$cal = new Calculator(13);
echo $cal->getA();
echo "\n";
$cal->add(5);
echo $cal->getA();
echo "\n";
$cal->add(7);
$cal->multiple(3);
$cal->minus(4);
$cal->divide(2);
$cal->squere();
echo $cal->getA();


//$cal = new Calculator(13);
//$cal->add(5)->add(7)->multiple(3)->minus(4)->divide(2);
//echo $cal->a;

