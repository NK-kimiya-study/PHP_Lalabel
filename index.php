<?php
//foreach

$members = [
    'name' => 'テスト',
    'height' => 170,
    'hobby' => "サッカー"
];

//バリューのみ
foreach ($members as $member) {
    echo $member;
}

//キーとバリュー
foreach ($members as $key => $value) {
    echo $key . 'は' . $value . 'です';
}

//多段階のforeach
$members_2 = [
    'テスト' => [
        'height' => 170,
        'hobby' => "サッカー"
    ],
    'テスト2' => [
        'height' => 165,
        'hobby' => "サッカー"
    ]
];

foreach ($members_2 as $member_1) {
    foreach ($member_1 as $member) {
        echo $member;
    }
}

//for(繰り返す回数が決まってる場合)
//while(繰り返す回数が決まってない場合)
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

//continue,break
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i;
}

for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i;
}

echo '<br>';

$j = 0;
while ($j < 5) {
    echo $j;
    $j++;
}
