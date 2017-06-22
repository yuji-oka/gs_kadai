<?php
//1. POSTデータ取得

$company = $_POST["company"];
$industry = $_POST["industry"];
$job = $_POST["job"];
$comment = $_POST["comment"];


//2. DB接続します
try {
  $pdo = new
  PDO('mysql:dbname=suc_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}
//{}内でもしエラーを検知したら、人間にわかるよう'DbConnectError:'と書いてくれるよ

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO suc_table(company, industry, job, comment,indate )VALUES(:company, :industry, :job, :comment, sysdate())");
$stmt->bindValue(':company', $company, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$stmt->bindValue(':industry', $industry, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$stmt->bindValue(':job', $job, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: select.php");
  exit;

}
?>
