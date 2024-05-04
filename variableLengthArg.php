<?php
//可変引数
function combine(string ...$name): string
{
    $combinedName = '';
    for ($i = 0; $i < count($name); $i++) {
        $combinedName .= $name[$i];
        if ($i != count($name) - 1) {
            $combinedName .= '.';
        }
    }

    return $combinedName;
}

$lName = '名前';
$fName = '苗字';
$name1 = combine($fName, $lName);

echo '試合結果:' . $name1;
echo '<br>';

$variableLength = combine('テスト１', 'テスト２', 'テスト3');
echo $variableLength;

//コールバック関数　(引数に関数を入れる)
function combineSpace(string $firstName, string $lastName): string
{
    return $lastName . '　' . $firstName;
}
$nameParams = ['名前', '苗字'];
function useCombine(array $name, callable $func)
{
    $concatName = $func(...$name);
    print($func . '関数での試合結果: ' . $concatName . '<br>');
}

useCombine($nameParams, 'combineSpace');
