<?php

$id = $_GET["id"];

//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_user_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
 $row = $stmt->fetch();

}

    
//fetch 一つだけ登録
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start]insert.php -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>ID：<input type="text" name="lid" value="<?=$row["lid"]?>"></label><br>
     <label>パスワード：<input type="text" name="lpw" value="<?=$row["lpw"]?>"></label><br>
<!--     <label>Email：<input type="text" name="email"></label><br>-->
<!--     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>-->
<!--    <form method="post" action="example.cgi">-->
<p>ステータス<br>
<?php
    if($row["kanri_flg"] == 0){
        echo '<input type="radio" name="kanri_flg" value="一般者" checked="checked"> 一般者';
        echo '<input type="radio" name="kanri_flg" value="管理者"> 管理者';
    }else{
                echo '<input type="radio" name="kanri_flg" value="一般者"> 一般者<input type="radio" name="kanri_flg" value="管理者" checked="checked"> 管理者';
    }
?>
</p>

<p>使用状況<br>
<?php
    if($row["life_flg"] == 0){
        echo '<input type="radio" name="life_flg" value="使用中" checked="checked"> 使用中';
        echo '<input type="radio" name="life_flg" value="使用しなくなった"> 使用しなくなった';
    }else{
                echo '<input type="radio" name="life_flg" value="使用中"> 一般者<input type="radio" name="life_flg" value="使用しなくなった" checked="checked"> 使用しなくなった';
    }
?>
<!--<input type="radio" name="life_flg" value="使用中"> 使用中-->
<!--<input type="radio" name="life_flg" value="使用しなくなった"> 使用しなくなった-->
</p>
<!--</form>-->
    <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
