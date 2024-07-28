<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマーク</title>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav>
            <a href="select.php">データ一覧</a>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <main>
        <form method="POST" action="insert.php">
            <fieldset>
                <legend>ブックマーク</legend>
                <label for="name">作品名</label>
                <input type="text" id="name" name="name" required placeholder="ONE PIECE">

                <label for="url">作品URL</label>
                <input type="url" id="url" name="url" required placeholder="xxx.com">

                <label for="content">コメント</label>
                <textarea id="content" name="content" rows="4" placeholder="作品説明など"></textarea>

                <input type="submit" value="送信する">
            </fieldset>
        </form>
    </main>
    <!-- Main[End] -->


</body>

</html>