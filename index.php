<?php
//条件分岐
$height = 91;

if ($height == 90) {
    echo '身長は' . $height . 'cmです';
}

if ($height >= 91) {
    echo '身長は' . $height . 'cmです';
}

if ($height <= 90) {
    echo '身長は' . $height . 'cmではありません';
}

if ($height !== 90) {
    echo '身長は90cmではありません';
}

$signal = 'blue';

if ($signal === 'red') {
    echo 'STOP';
} else if ($signal === 'yellow') {
    echo 'pause';
} else {
    echo 'move on';
}

$speed = 80;

if ($signal === 'blue') {
    if ($speed >= 80) {
        echo 'speeding violation';
    }
}

//データが入っているかどうか
$test = '1';

if (empty($test)) {
    echo '変数は空';
}

if (!empty($test)) {
    echo '変数は空ではありません';
}

//AND OR

$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
    echo '赤と青';
}
if ($signal_1 === 'red' || $signal_2 === 'blue') {
    echo '赤か青';
}

//三項演算子
$math = 80;
$comment = $math > 80 ? 'good' : 'bad';
echo $comment;
