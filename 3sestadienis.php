<?php

function funkcijosPavadinimasSuParametrais($parametras1, $parametras2){
    $naujasSKaicius = $parametras1 - $parametras2;
    return $naujasSKaicius;
}

function funkcijosPavadinimasBeParametru(){
    echo '<br>';
    echo '<hr>';
}

// sudedu du skaicius
echo funkcijosPavadinimasSuParametrais(3, 5);
funkcijosPavadinimasBeParametru();
$x = 6; $y= 9;
echo funkcijosPavadinimasSuParametrais($y, $y) + funkcijosPavadinimasSuParametrais(15,9);
funkcijosPavadinimasBeParametru();