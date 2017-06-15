<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["lid"]) || $_POST["lid"]=="" ||
  !isset($_POST["lpw"]) || $_POST["lpw"]=="" ||
  !isset($_POST["kanri_flg"]) || $_POST["kanri_flg"]=="" ||
!isset($_POST["life_flg"]) || $_POST["life_flg"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$name   = $_POST["name"];
$lid  = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_user_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, name, lid, lpw,kanri_flg,life_flg )VALUES(:a_id,:a1, :a2, :a3, :a4,:a5)");
$stmt->bindValue(':a_id', $lid);
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $lid);
$stmt->bindValue(':a3', $lpw);
if($kanri_flg=="0"){
    $stmt->bindValue(':a4', 0);
}else{
    $stmt->bindValue(':a4', 1);
}
if($kanri_flg=="0"){
    $stmt->bindValue(':a5', 0);
}else{
    $stmt->bindValue(':a5', 1);
}

//$stmt->bindValue(':a5', $life_flg);
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
