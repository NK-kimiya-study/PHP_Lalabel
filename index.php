<?php
$globalVariable = 'グローバル変数';

function checkScope($str)
{
    $localVariable = 'ローカル変数';
    echo $localVariable;
    //global $globalVariable;
    echo $str;
}

echo $globalVariable;
echo checkScope($globalVariable);
