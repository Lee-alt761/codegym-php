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
        <?php
        try {
            $db = new PDO('mysql:dbname=mydb;host=mysql;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            echo 'DB接続エラー: ' . $e->getMessage();
        }
        $id = $_REQUEST['id'];
        if (!is_numeric($id) || $id <= 0) {
            print('1以上の数字で指定してください');
            exit();
        }
        $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
        $memos->execute(array($_REQUEST['id']));
        $memo = $memos->fetch();
        ?>
        <article>
            <pre><?php print($memo['memo']); ?></pre>

            <a href="index.php">戻る</a>
        </article>
    </main>
</body>

</html>
