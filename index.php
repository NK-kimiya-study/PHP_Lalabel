<?php
//連想配列
$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo $array_member['hobby'];
echo '<br>';

$array_member_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '田中' => [
        'height' => 160,
        'hobby' => '野球'
    ]
];

echo $array_member_2['田中']['height'];
echo '<br>';

$array_member_3 = [
    'class1' => [
        '本田' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '田中' => [
            'height' => 160,
            'hobby' => '野球'
        ]
    ],
    'class2' => [
        '山田' => [
            'height' => 180,
            'hobby' => 'バスケ'
        ],
        '石田' => [
            'height' => 175,
            'hobby' => '卓球'
        ]
    ]
];

echo $array_member_3['class2']['山田']['height'];
