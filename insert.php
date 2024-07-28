<?php

try {
 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "接続成功";
} catch (PDOException $e) {
    exit('DBConnectError:' . $e->getMessage());
}
?>

<?php
// フォームデータの取得
$name = $_POST['name'];
$url = $_POST['url'];
$content = $_POST['content'];

// SQL文を準備
$stmt = $pdo->prepare("INSERT INTO phpkadai02(book_name, book_url, book_comment, date) VALUES(:name, :url, :content, NOW())");

// バインド変数を設定
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);

// SQL実行
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    exit('SQLError:' . $e->getMessage());
}

// 実行結果の確認
if($status === false){
    $error = $stmt->errorInfo();
    exit("ErrorMessage:" . $error[2]);
} else {
    header("Location: index.php");
    exit();
}
?>
