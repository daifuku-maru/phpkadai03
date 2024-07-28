<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */

$id = $_GET['id'];

 try {

	$pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
 } catch (PDOException $e) {
     exit('DB Connection Error:' . $e->getMessage());
 }
 
//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM phpkadai02 WHERE id=:id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
 
 //３．データ表示
 $view = '';
 if ($status === false) {
     $error = $stmt->errorInfo();
     exit('SQLError:' . print_r($error, true));
 }


?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Head[Start] -->
	<header>
	  <nav>
	    <a href="select.php">データ一覧</a>
	  </nav>
	</header>
	<!-- Head[End] -->
	
	<!-- method, action, 各inputのnameを確認してください。  -->
	<form method="POST" action="update.php">
	  <fieldset>     
        <?php while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
			<input type="hidden" name="id" value="<?= $id;?>" />
			<legend><?= $result['book_name']?></legend>
			
			<label for="name">タイトル</label>
			<input type="text" id="name" name="name" value="<?= $result['book_name'];?>" required placeholder="山田 太郎">
			
			<label for="url">作品URL</label>
			<input type="url" id="url" name="url" value="<?= $result['book_url'];?>" required placeholder="xxx.com">
			
			<label for="content">内容</label>
			<textarea id="content" name="content" rows="4" value="" required placeholder="ご意見やご感想をお聞かせください"><?= $result['book_comment']; ?></textarea>
			
			<input type="submit" value="更新する">
		<?php endwhile; ?>
	  </fieldset>
	</form>
</body>
</html>