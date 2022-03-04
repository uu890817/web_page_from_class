<!doctype html>
<?php
session_start();
$_SESSION[page] = "upload" ; 
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
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">圖片上傳</font></h1>
</center>


<hr width="25%" color="Green">

<!-- 導覽列 -->
<?php require("nav_bar.php") ?>	

<!-- 登入歡迎 -->
<?php require("../php_Module/login_welcome.php") ?>	
	
<hr width="90%" color="#8cfffb" align="left">
	

<!-- 時間與IP -->		
<?php require("../php_Module/time_and_ip.php") ?>
	
<?php
		if($_SESSION["session_cheak_result"] == "check_OK"){
			echo "<font size=\"+2\">登入檢查:<font color=\"#00CB9C\">已登入</font></font><br><br>";
		}
		else{
			echo "<font size=\"+2\">登入檢查:"."<font color=\"red\">未登入</font></font><br><br>";
		};	
?>	
	

	
<center>
	<table bgcolor="#EAF9FF" style="border: 2px #1BAFA8 solid">
		<tr><td>　</td></tr>
		<tr><td><font size="+3" color="#90B2F7"><center><b>照　片　上　傳<b></center></font></td></tr>
		<tr><td><font size="+1" color="#658BD9"><center><b>(需小於1MB之JPG、PNG或BMP檔)<b></center></font></td></tr>
		<tr><td><center><?php echo "<form action=\"upload_file_check.php\" method=\"post\" enctype=\"multipart/form-data\"><br>"; ?></center></td></tr>
		<tr><td>　　　　　<?php echo "<input name=\"upload_file\" type=\"file\"><br><br>" ?></td></tr>
		<tr><td><center><?php if($_SESSION["session_cheak_result"] == "check_OK"){ echo "<input type=\"submit\" value=\"上傳檔案\"><br>"; } else{ echo "<font size=\"+3\" color=\"red\">請登入之後再進行上傳</font>"; }?></center></td></tr>
		<tr><td>　</td></tr>
	</table>
	<br>
			

	<br>
</center>

	
	

	
	

	
	

	
	
	

</center>	
	


<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>