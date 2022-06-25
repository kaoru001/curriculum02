<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>
<link rel="stylesheet" href="style.css">
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name ?>さん</p>
<form action="answer.php" method="post">
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php $ports = [80,22,20,21];
foreach($ports as $port) {
  ?><input type="radio" name="port" value="<?php echo $port; ?>"><?php echo $port;
  }?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php $programs = ['PHP','Python','JAVA','HTML'];
foreach($programs as $program) {
  ?><input type="radio" name="program" value="<?php echo $program; ?>"><?php echo $program;
  }?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php $my_sqls = ['join','select','insert','update'];
foreach($my_sqls as $my_sql) {
  ?><input type="radio" name="my_sql" value="<?php echo $my_sql; ?>"><?php echo $my_sql;
  }?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="submit" value="回答する" />