<?php
$name=$_POST["name"];
$mail=$_POST["mail"];
$age=$_POST["age"];
$hobby=$_POST["hobby"];
$special=$_POST["special"];

$c=",";

//文字作成
$str = date("Y-m-d H:i:s");
$str .= $c.$name.$c.$mail.$c.$age.$c.$hobby.$c.$special;


//File書き込み
$file = fopen("data/test.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h2>回答ありがとうございました。</h2>
<div><?=$str?></div>
<ul>
<li><a href="read.php">結果を見る</a></li>
</ul>
</body>
</html>