<?php
//ユーザー定義関数
function test()
{
    echo 'テスト';
}

test();

$comment = 'コメント';
function getComment($string)
{
    echo $string;
}

getComment($comment);

function getNumberOfComment()
{
    return 5;
}

$commentNumber = getNumberOfComment();
echo $commentNumber;

function sumPrice($int1, $int2)
{
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3, 5);
echo $total;
