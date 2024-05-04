<?php
$parameters = ['　空白あり', '配列', '空白あり　'];

echo '<pre>';
var_dump($parameters);
echo '</pre>';

//配列の値それぞれに関数を適用(無名関数)
$trimedParameters = array_map('trim', $parameters);
echo '<pre>';
var_dump($trimedParameters);
echo '</pre>';
