<?php
//
//$array = [1, 2, 4];
//
//// if statment
//$key = 'age';
//
//function getName()
//{
//    if (4 > 1) {
//        return 'Robertas';
//    } else {
//        return false;
//    }
//
//}
//
//if (!empty($array)) {
//    foreach ($array as $element){
//        if($element !== 4){
//            echo ';) ';
//        }
//    }
//}
////} elseif (getName() === 'Robertas') {
////    echo 'Pusetinai gerai';
////} else {
////    echo 'false';
////}
//
//
//// OR AND
//
//$name = 'Arnodlas';
//$surname = 'Turulis';
//
//if($name === 'Robertas'){
//    echo 'jo, gerai';
//}
//echo 'dsads';
//echo $surname.' '.$name;
//
//$array = [1, 2,4, 5,6, 7, 45, 2, 4,5, 5, 934, 34, 2, 3,43, 6,6, 234, 3,34 , 34 ,3, 4 ,34 ,34 ,343 ,34,2,2,];
//// Atspausdzinti skaicius tik tuos kurie yra lyginiai ir mazesni nei visu skaiciu vidurkis
//
//$avg = array_sum($array)/count($array);
//$naujasArray = [];
//foreach ($array as $x){
//    if($x < $avg && $x % 2 === 0){
//        echo $x;
//        $naujasArray[] = $x;
//    }
//}
//
//print_r($naujasArray);
//
//// Funkcijos

//function minus($x, $y){
//    return $x - $y;
//}

//echo minus(2, 3);


//$ats = minus(3,5);
//
//echo minus($skaicius, $bekleka) + -2;


function getAvarange(array $array)
{
    $sum = array_sum($array);
    $count = count($array);
    $avg = $sum / $count;
    return $avg;
}

$array = [1, 2, 3, 4, 5, 6, 7, 7, 7];
$array2 = [5, 6, 3, 3, 6, 7, 9, 1, 2, 3];

//echo getAvarange($array);
//echo "\n";
//echo getAvarange($array2);
//
//echo "\n";
//
//echo getAvarange([getAvarange($array), getAvarange($array2), 3, 5, 5,999]);
//echo "\n";
//echo number_format(10000000, 2, ',', '');

function formatPrice($num)
{
    return number_format($num, 2, ',', ' ') . '€';
}

echo formatPrice(2) . "\n";
echo formatPrice(2.5) . "\n";
echo formatPrice(6222.3) . "\n";
echo formatPrice(444.843) . "\n";
echo formatPrice(12.33) . "\n";
echo formatPrice(838) . "\n";


// Parasyti funkcija kuri pasakytu ar skaicius yra pirminis.


// 42 67 89 17634 99999 3434321


// 68

function orNumberIsPrimary($x)
{
    for ($i = 2; $i <= $x; $i++) {
        if ($x % $i === 0) {
            return false;
        }
    }
    return true;
}










