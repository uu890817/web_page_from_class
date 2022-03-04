<!doctype html>
<?php
session_start();
$_SESSION[page] = "photo_view" ; 
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
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">其他</font></h1>
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
	

	
	
	
	
	
	
			
	<table bgcolor="#EAF9FF" style="border: 2px #1BAFA8 solid">
		<tr><td>　</td></tr>
		<tr><td><font size="+3" color="#90B2F7"><center><b>活　動　相　片<b></center></font></td></tr>

		<tr><td width = 500pt><center><?php 
			
			if($_SESSION["session_cheak_result"] != "check_OK"){ 
				echo "<font size=\"+3\" color=\"red\">請登入之後再進行查看</font><br>"; 
			} 
			else{ 
				
				if (is_dir("/home/107/jp107a/107b15779/pubhtml/upload/")){
					$handle = opendir("/home/107/jp107a/107b15779/pubhtml/upload/");
					$pic_count = 0 ;
					$file_png = $_SESSION[account].".png" ;
					$file_jpg = $_SESSION[account].".jpg" ;
					$file_bmp = $_SESSION[account].".bmp" ;
					$file_gif = $_SESSION[account].".gif" ;
					while ($file = readdir($handle)) {	
						if ($file == $file_png or $file == $file_jpg or $file == $file_bmp or $file == $file_gif){
							

							#echo "<font size=\"+1\" color=\"#448DAA\"><br>".$file."<br>";
							echo "<a href=../upload/"."$file target=\"_blank\"><img src=../upload/"."$file width=\"100pt\"</a>";  
							echo "　" ;
							$pic_count++;
							if ($pic_count % 3 == 0){
								echo "<br>";
							}

						}
							
					}
					
				}
			}
			
			?>
		</center>
	</table>
	
	


<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>