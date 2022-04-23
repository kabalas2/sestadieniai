<?php

include 'Coffee.php';
include "Tea.php";
include "MilkShake.php";
//$coffee = new Tea();
//$coffee->setBeans('Arabic');
//$coffee->setMilk(false);
//$coffee->setSugar(false);
//$coffee->setSyrup('caramel');
//$coffee->setMarshMelow(true);
//$coffee->setSprimles(false);
//$coffee->setCup('');
//$tea = new Tea();
//$tea->setCup('xl');
//$tea->setSugar(false);
//$tea->setTea('green');

$milkshake = new MilkShake();
$milkshake->setCup('xl');
$milkshake->setSugar(false);
$milkshake->setIce(true);
$milkshake->setIceCreams(true);
$milkshake->setFlave('banana');
$milkshake->setAdditives('fruits');
?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="table">
        <div class="cup-wrapper">
<!--            --><?php //echo $coffee->delivery(); ?>

        </div>
    </div>
</body>
</html>



