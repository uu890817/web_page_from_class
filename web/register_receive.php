<!doctype html>
<?php
session_start();
$_SESSION[page] = "register" ; 
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
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">活動報名確認</font></h1>
</center>


<hr width="25%" color="Green">

<!-- 導覽列 -->
<?php require("nav_bar.php") ?>	

<!-- 登入歡迎 -->	
<?php require("../php_Module/login_welcome.php") ?>	
	
<hr width="90%" color="#8cfffb" align="left">

<!-- 時間與IP -->	
<?php require("../php_Module/time_and_ip.php") ?>

<!-- 偵測是否必填 -->
<center>
<?php 
	
	if($_SESSION[session_cheak_result] == "check_OK"){
		
		if($_GET[name]=="" and $_GET[tel]==""){
			echo "<font size=\"+3\" color=\"red\">姓名與電話為必填項，5秒後將自動返回報名頁面</font>";
			echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/register.php\">";
			exit();
		}
		elseif($_GET[name]=="" and $_GET[tel]!=""){
			echo "<font size=\"+3\" color=\"red\">姓名為必填項，5秒後將返回報名頁面</font>";
			echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/register.php\">";
			exit();
		}
		elseif($_GET[name]!="" and $_GET[tel]==""){
			echo "<font size=\"+3\" color=\"red\">電話為必填項，5秒後將返回報名頁面</font>";
			echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/register.php\">";
			exit();
		
		}
	}
	else{
		
		echo "<font size=\"+3\" color=\"red\">請先登入再進行報名</font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php \">";
		exit();
	}

	
	
?>
</center>

	
	
<center>
	<font size="+3" color="#FF6666"><b>請再次確認您的報名資料 <b><br><br></font>
	<table bgcolor="#FCE0FF" style="border: 2px #8157AF dashed" >
	<tr>
		<td  align="right"><font size="+2" color="#6742FC"><b>姓名&nbsp;:&nbsp;&nbsp;<b><br></font></td>
		<td ><?php 
			$NAME = $_GET[name];  
			echo "<font size=\"+2\" color=\"#6742FC\"><b>$NAME<b><br></font>";?></td>
	</tr>
	<tr>
		<td  align="right"><font size="+2" color="#6742FC"><b>電話&nbsp;:&nbsp;&nbsp;<b><br></font></td>
		<td ><?php 
			$tel = $_GET[tel];  
			echo "<font size=\"+2\" color=\"#6742FC\"><b>$tel<b><br></font>";?></td>
	</tr>
	<tr>	
		<td align="right"><font size="+2" color="#6742FC"><b>性別&nbsp;:&nbsp;&nbsp; <b><br></font></td>
		<td><?php 
			$sex = $_GET[sex]; 
			echo "<font size=\"+2\" color=\"#6742FC\"><b>$sex<b><br></font>"; ?></td>
	</tr>
	<tr>
		<td align="right"><font size="+2" color="#6742FC"><b>報名場次&nbsp;:&nbsp;&nbsp; <b><br></font></td>
		<td><?php 
			$when = $_GET[when]; 
			echo "<font size=\"+2\" color=\"#6742FC\"><b>$when<b><br></font>"; ?></td>
	</tr>
	<tr>
		<td align="right"><font size="+2" color="#6742FC"><b>報名人數&nbsp;:&nbsp;&nbsp;<b><br></font></td>	
		<td><?php 
			$howManyPeople = $_GET[howManyPeople];
			if($howManyPeople == 0){
				$howManyPeople = "<font color=\"#FF1111\"><b>請選擇人數<b></font>";
			};
			echo "<font size=\"+2\" color=\"#6742FC\"><b>$howManyPeople<b><br></font>"; ?></td>	
	</tr>
	<tr>
		<td align="right"><font size="+2" color="#6742FC"><b>是否需要午餐&nbsp;:&nbsp;&nbsp; <b><br></font></td>		
		<td><?php 
			$lunch = $_GET[lunch];
			echo "<font size=\"+2\" color=\"#6742FC\"><b>$lunch<b><br></font>"; ?></td>	
	</tr>
	<tr>
		<td align="right"><font size="+2" color="#FC4198"><b>需繳金額&nbsp;:&nbsp;&nbsp;<b><br></font></td>		
		<td><?php 
			if ($lunch == "需要"){
				$lunch = 100;
			}
			else{
				$lunch = 0;
			};
			$price = ($lunch*$howManyPeople)+(1000*$howManyPeople);
			echo "<font size=\"+2\" color=\"#FC4198\"><b>$price<b><br></font>"; ?></td>	
	</tr>
	</table>
	<br><br><br>
</center>
	

	

	
<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>