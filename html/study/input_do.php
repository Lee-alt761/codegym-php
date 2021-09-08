<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>よくわかるPHPの教科書</title>
</head>

<body>
    <header>
        <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
    </header>

    <main>
        <h2>Practice</h2>
        <pre>
<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=mysql;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}

$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
$statement->execute(array($_POST['memo']));
echo 'メモが登録されました';
?>
        </pre>
    </main>

</body>

</html>
