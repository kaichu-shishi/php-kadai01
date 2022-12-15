<?php

$time = date('Y-m-d H:i:s');
$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$email = $_POST['email'];
$age = $_POST['age'];
$earnings = $_POST['earnings'];
$history = $_POST['history'];

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $time . "　名前：" . $name . "　出身地：" . $birthPlace . "　Email：". $email . "　年齢：" . $age . "　年収：" . $earnings . "　恋愛遍歴：" . $history . "\n");
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
