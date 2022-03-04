<!doctype html>
<?php

session_start();
$_SESSION[page] = "manager" ; 
?>
<html>
<head>
<meta charset="utf-8">
<title>動態網頁設計上課用</title>
<link rel="icon" href="../../pic/icon.png">
</head>

	
<!-- body開始 -->
<body background="../../pic/BG.png">

<center>
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">管理員介面</font></h1>
</center>


<hr width="25%" color="Green">

<!-- 導覽列 -->
<center><font size="+2" ><b>
	<style>a{ text-decoration:none;color: #56A1FB; }</style>
	<a href="../manager/manager_home.php"><font color="#124DD8">管理頁面首頁</font></a>
	<font size="+3">&emsp;&emsp;&emsp;&emsp;</font>
	<a href="../../web/login.php">登入</a>
	<font size="+3">&emsp;&emsp;</font>
	<a href="../../web/logout.php">登出</a>
</b></font></center>

<!-- 登入歡迎 -->
<?php require("../../php_Module/login_welcome.php") ?>	
	
<hr width="90%" color="#8cfffb" align="left">
	

<!-- 時間與IP -->	
<?php require("../../php_Module/time_and_ip.php") ?>
	
	<?php
		if($_SESSION[root] == true){
			echo "<font color=\"#3A96AD\" size = \"+2\"><b>";
			echo "歡迎回到管理介面";
			echo "</b></font>";
		}
		else{
			echo "<font color=\"#DB0101\" size = \"+2\"><b>";
			echo "你沒有管理員權限，將跳轉回登入頁面";
			echo "<meta http-equiv=\"refresh\" content=\"0.1;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php \">";
			echo "</b></font>";
		}
	
		echo "<br><br>";
		echo "總硬碟容量 : ";
		echo number_format(disk_total_space("."))." bytes<br>";
		echo "總硬碟容量 : ";
		echo number_format(disk_free_space("."))." bytes<br>";
		
		$upload_dir=$_SERVER['SCRIPT_FILENAME'];
		echo "upload_dir:".$upload_dir."<br>";

		echo $_SERVER["PHP_SELF"]."<br>";
		echo $_SERVER['SCRIPT_FILENAME']."<br>";
		echo __FILE__."<br>"; // 注意 兩個底線
		echo dirname(__FILE__)."<br>";
		echo basename(__FILE__)."<br>";

	
	
	?>
</center>


	
<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>