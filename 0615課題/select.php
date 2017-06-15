<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=suc_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM suc_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
   $view .='<tr class="data2">';
    $view .= '<td class="data2 common">'.$result["company"] .'</td>';
    $view .= '<td class="data2 common">'.$result["industry"] .'</td>';
    $view .= '<td class="data2 common">'.$result["job"] .'</td>';
    $view .= '<td class="data2 comment">'.$result["comment"] .'</td>';
    $view .= '</tr>';
  }

}
?>

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>企業情報</title>
        <link rel="stylesheet" href="css/range.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style2.css">
        <style>
            div {
                padding: 10px;
                font-size: 16px;
            }



        </style>
    </head>

    <body id="main">
        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">企業情報登録一覧</a>
                    </div>
                <div class="userbtn">
                <input type="button" value="ユーザー管理画面へ" onClick="document.location='ユーザー管理/index2.php';"></div></div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <div>
            <div class="container">
            <table id="table1">
           <tr id="t-header"><th class="common">企業名</th><th class="common">業種</th><th class="common">職種</th><th class="comment">コメント</th></tr>
            <?=$view?>
        </table>
            </div>
        </div>
        <!-- Main[End] -->

    </body>

    </html>
