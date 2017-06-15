<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>営業メモ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
        fieldset{
            text-align: center
        }
        label{
            width: 50%;
        }
        label > .temp{
            display: inline-block;
            width: 20%;
        }
        

    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">営業メモ登録</a></div>
                <div class="userbtn">
                <input type="button" value="ユーザー管理" onClick="document.location='ユーザー管理/index.php';">
                   <input type="button" value="ユーザー一覧" onClick="document.location='ユーザー管理/select.php';">
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>企業情報</legend>
                <label><span class="temp">企業名：</span><input type="text" name="company" style="width:35%;"></label><br>
                <label><span class="temp">業界名：</span><input type="text" name="industry" style="width:35%;"></label><br>
                <label><span class="temp">職種名：</span><input type="text" name="job" style="width:35%;"></label><br>
                <label><span class="temp">コメント</span><br><textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
