<?php

//変数 動的型付
$test = 123;
//$test = 'テスト';

var_dump($test);

$test_1 = 123;
$test_2 = 456;

$test_3 = $test_1 . $test_2;
var_dump($test_3);

echo $test;
