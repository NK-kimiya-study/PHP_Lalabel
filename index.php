<?php
//配列
$array = ['テスト', 1, 2, 3];

echo $array[1];
echo '<pre>';
var_dump($array);
echo '<pre>';

$array2 = [
    ['R', 'G', 'B'],
    [220, 150, 100]
];

echo '<pre>';
var_dump($array2);
echo '<pre>';

echo $array2[1][1];
