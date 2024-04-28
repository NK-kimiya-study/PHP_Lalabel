<?php
//入力、確認、完了 input.php,confirm.php,thanks.php
//input.php
$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;
}

if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
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
    <?php
    if ($pageFlag === 0) : ?>
        <form method="POST" action="input.php">
            氏名
            <input type="text" name="your_name">
            <br>
            メールアドレス
            <input type="email" name="email">
            <br>
            <input type="submit" value="確認する" name="btn_confirm">
        </form>
    <?php endif; ?>

    <?php
    if ($pageFlag === 1) : ?>
        <form method="POST" action="input.php">
            氏名
            <?php echo $_POST['your_name']; ?>
            <br>
            <?php echo $_POST['email']; ?>
            <br>
            <input type="submit" value="送信する" name="btn_submit">
            <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        </form>
    <?php endif; ?>

    <?php
    if ($pageFlag === 2) : ?>
        送信が完了しました。
    <?php endif; ?>

</body>

</html>