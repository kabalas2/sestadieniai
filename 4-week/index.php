<?php

include 'SqlBuilder.php';

$sql = new SqlBuilder();
$data = [
    'title' => 'Naujas title',
    'content' => 'bla bla bla',
    'active' => 1
];
//$sql->insert('news', $data);
//$sql->from('news');
// $sql->where('id', 2);
$sql->select('*');

$sql->from('news');

$sql->orderBy('id');

echo $sql->save() . "\n";

//$array = [1, 3, 4, 5];
//echo implode('","', $array);




