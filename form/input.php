<?php

if (!empty($_POST['your_name'])) {
    //スーパーグローバル変数　連想配列
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form method="POST" action="input.php">
        氏名
        <input type="text" name="your_name">
        <br>
        <input type="checkbox" name="sports[]" value="神奈川県">神奈川県
        <input type="checkbox" name="sports[]" value="埼玉">埼玉
        <input type="checkbox" name="sports[]" value="栃木">栃木
        <input type="checkbox" name="sports[]" value="群馬">群馬
        <input type="submit" value="送信">
    </form>
</body>

</html>