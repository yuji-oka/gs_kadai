<?php

$id     = $_GET["id"];

try {
  $pdo = new PDO('mysql:dbname=gs_user_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


$stmt = $pdo->prepare("DELETE FROM gs_user_table  WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
 header("Location: select.php");
 exit;

}


?>
