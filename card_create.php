<?php
// POSTデータ確認
if (!isset($_POST["gacha"]) || $_POST["gacha"] === "") {
  exit("paramError");
}

$gacha = $_POST["gacha"];

// 各種項目設定
$dbn ='mysql:dbname=gsy_d12_09;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// 「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる．

// SQL作成&実行

$sql = 'INSERT INTO mushiking (cards) VALUES (:gacha)';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':gacha', $gacha, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:index.php");
exit();