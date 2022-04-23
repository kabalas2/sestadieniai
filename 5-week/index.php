<?php

include 'Coffee.php';
include "Tea.php";
$coffee = new Tea();
$coffee->setBeans('Arabic');
$coffee->setMilk(false);
$coffee->setSugar(false);
$coffee->setSyrup('caramel');
$coffee->setMarshMelow(true);
$coffee->setSprimles(false);
$coffee->setCup('');
//$tea = new Tea();
//$tea->setCup('xl');
//$tea->setSugar(false);
//$tea->setTea('green');
?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="table">
        <div class="cup-wrapper">
            <?php echo $coffee->delivery(); ?>
        </div>
    </div>
</body>
</html>



