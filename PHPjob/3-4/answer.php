<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$port = $_POST['port'];
$program = $_POST['program'];
$my_sql = $_POST['my_sql'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<link rel="stylesheet" href="style.css">
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php if($port == 80){
  echo "正解！";
}else{
  echo "残念・・・";
}
?>
<br>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php if($program == 'HTML'){
  echo "正解！";
}else{
  echo "残念・・・";
}
?>
<br>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php if($my_sql == 'select'){
  echo "正解！";
}else{
  echo "残念・・・";
}
?>