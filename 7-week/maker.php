<html>
<head>
    <link type="text/css" rel="stylesheet" href="/css/style.css">
</head>
<body>

<?php

print_r($_POST);
$class = $_POST['drink'];
$class = ucfirst($class);
include $class . '.php';
$drink = new $class($_POST);

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