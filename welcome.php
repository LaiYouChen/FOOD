<?php
session_start();  //很重要，可以用的變數存在session裡
$username=$_SESSION["username"];
echo "<h1>你好 ".$username."</h1>";
echo "<a href='index.html'>未成功跳轉頁面請點擊此</a>";
header('HTTP/1.0 302 Found');
header("refresh:0.00001;url=newindex.html",true);  
?>