<?php

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

// SQL作成&実行
$sql = "SELECT cards FROM mushiking";
$stmt = $pdo -> prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


// SQL実行の処理
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
      <div>{$record["cards"]}</div>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>DB連携型todoリスト（一覧画面）</legend>
    <a href="todo_input.php">入力画面</a>
<div>
  <?= $output ?>
</div>

  </fieldset>
</body>

</html>