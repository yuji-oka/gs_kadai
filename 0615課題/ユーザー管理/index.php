<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="ユーザー管理/css/main.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ユーザー登録</a></div>
                <div class="userbtn">
                <input type="button" value="企業情報登録一覧" onClick="document.location='0615課題/index.php'"></div></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="mainvis">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>パスワード：<input type="text" name="lpw"></label><br>
<!--     <label>Email：<input type="text" name="email"></label><br>-->
<!--     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>-->
<!--    <form method="post" action="example.cgi">-->
<p>ステータス<br>
<input type="radio" name="kanri_flg" value="0"> 一般者
<input type="radio" name="kanri_flg" value="1"> 管理者
</p>

<p>使用状況<br>
<input type="radio" name="life_flg" value="0"> 使用中
<input type="radio" name="life_flg" value="1"> 使用しなくなった
</p>

<!--</form>-->

     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
