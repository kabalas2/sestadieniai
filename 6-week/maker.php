<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

print_r($_POST);

if ($_POST['drink'] === 'coffe') {
    include 'Coffee.php';
    $drink = new Coffee();
    $drink->setCup($_POST['size']);
    $drink->setMilk($_POST['milk']);
    $drink->setSugar($_POST['sugar']);
} elseif ($_POST['drink'] === 'tea') {
    include 'Tea.php';
    $drink = new Tea();
    $drink->setCup($_POST['size']);
    $drink->setSugar($_POST['sugar']);
    $drink->setTea($_POST['tea']);
} elseif ($_POST['drink'] === 'milkshake') {
    include 'MilkShake.php';
    $drink = new MilkShake();
    $drink->setCup($_POST['size']);
    $drink->setFlave($_POST['flave']);
    $drink->setSugar($_POST['sugar']);
}
?>
<div class="table">
    <div class="cup-wrapper">
        <?php
        echo $drink->delivery();
        ?>

    </div>
</div>
</body>
</html>

?>