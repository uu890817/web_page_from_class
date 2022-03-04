<!doctype html>
<?php

session_start();
$_SESSION[page] = "logout" ; 
?>
<html>
<head>
<meta charset="utf-8">
<title>動態網頁設計上課用</title>
<link rel="icon" href="../pic/icon.png">
</head>

	
<!-- body開始 -->
<body background="../pic/BG.png">

<center>
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">登出</font></h1>
</center>


<hr width="25%" color="Green">

<!-- 導覽列 -->
<?php require("nav_bar.php") ?>	


	
<hr width="90%" color="#8cfffb" align="left">
	

<!-- 時間與IP -->		
<?php require("../php_Module/time_and_ip.php") ?>

<?php
	if ($_SESSION[session_cheak_result] == check_OK){
		
		session_destroy();
		echo "<font color=\"red\" size=\"+2\"><b>你已登出，5秒後將跳回登入頁面</b></font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php\">";
		echo "<br><br>";
		
	}
	else{
		echo "<font color=\"red\" size=\"+2\"><b>你沒有登入，5秒後將跳至登入頁面</b></font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php\">";
		echo "<br><br>";
	};

	?>
	
</center>	
	
<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>