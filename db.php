<?php

require 'PDO.php';


//ユーザー入力なし
//$sql = 'select * from contacts where id = 3';
//$stmt = $pdo->query($sql);

//$result = $stmt->fetchall();

//var_dump($result);

//ユーザー入力あり
$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 3, PDO::PARAM_INT);
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

//トランザクション まとめて処理

$pdo->beginTransaction();

try {
    //sql処理
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('id', 3, PDO::PARAM_INT);
    $stmt->execute(); //実行
    $pdo->commit(); //まとめて処理
} catch (PDOException $e) {
    $pdo->rollback(); //更新のキャンセル
}
