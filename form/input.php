<?php

session_start(); //CSRF対策

header('X-FRAME-OPTIONS:DENY'); //XSS対策
//入力、確認、完了 input.php,confirm.php,thanks.php
//input.php
if (!empty($_SESSION)) {
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
}
$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;
}

if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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
        <?php
        if (!isset($_SESSION['csrfToken'])) {
            $csrfToken = bin2hex(random_bytes(32)); //CSRF対策
            $_SESSION['csrfToken'] = $csrfToken;
        }
        $token = $_SESSION['csrfToken'];

        ?>
        <form method="POST" action="input.php">
            氏名
            <input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) {
                                                            echo h($_POST['your_name']); //XSS攻撃の対策
                                                        } ?>">
            <br>
            メールアドレス
            <input type="email" name="email" value="<?php if (!empty($_POST['email'])) {
                                                        echo h($_POST['email']);
                                                    } ?>">
            <br>
            <input type="submit" value="確認する" name="btn_confirm">
            <input type="hidden" name="csrf" value="<?php echo $token; ?>">
        </form>
    <?php endif; ?>

    <?php
    if ($pageFlag === 1) : ?>
        <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
            <form method="POST" action="input.php">
                氏名
                <?php echo h($_POST['your_name']); ?>
                <br>
                <?php echo h($_POST['email']); ?>
                <br>
                <input type="submit" name="back" value="戻る">
                <input type="submit" value="送信する" name="btn_submit">
                <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
                <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
                <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
            </form>
        <?php endif; ?>
    <?php endif; ?>
    <?php
    if ($pageFlag === 2) : ?>
        <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
            送信が完了しました。
            <?php unset($_SESSION['csrfToken']); ?>
        <?php endif; ?>
    <?php endif; ?>

</body>

</html>