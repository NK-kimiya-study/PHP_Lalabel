<?php
$test = 'test';
echo strlen($test);

$str = '文字列を置換する';
echo str_replace('置換', 'ちかん', $str);

$str_2 = '指定文字列で、分割';
echo '<br/>';
var_dump(explode('、', $str_2));

echo '<br/>';
$str_3 = '特定の文字列が含まれているか確認する';
echo preg_match('/文字列/', $str_3);

echo '<br/>';
echo substr('abcde', 1);

//配列に配列を追加する
$array = ['りんご', 'みかん'];
array_push($array, 'ぶとう', 'なし');
echo '<br/>';
var_dump($array);
