<!doctype html>
<?php
session_start();
$_SESSION[page] = "login" ; 
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
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">登入資訊</font></h1>
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
	
	#$account_array = array("aaa","bbb","ccc","ddd");
	#$password_array = array("111","222","333","444");
	require("log_backup.php");
	
	$pass = false ;
	for($i=0;$i<4;$i++){
		if ($account_array[$i] == $_POST["account"] and $password_array[$i] == $_POST["password"] ){
			$pass = true ;
		};
	};
	
	
	if($_POST[account]=="" and $_POST[password]==""){
		echo "<font size=\"+3\" color=\"red\">帳號與密碼為必填項，5秒後將自動返回登入頁面</font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php \">";
		exit();
	}
	elseif($_POST[account]=="" and $_POST[password]!=""){
		echo "<font size=\"+3\" color=\"red\">帳號為必填項，5秒後將自動返回登入頁面</font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php \">";
		exit();
	}
	elseif($_POST[account]!="" and $_POST[password]==""){
		echo "<font size=\"+3\" color=\"red\">密碼為必填項，5秒後將自動返回登入頁面</font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php \">";
		exit();
	}
	elseif($_POST[account] == "admin" and $_POST[password] == "12345"){
			echo "<font size=\"+3\" color=\"#5EC05E\">管理員<font color=\"#31BCC3\"><b>$_POST[account]</b></font>已成功登入</font><br><br>";
			echo "<font size=\"+3\" color=\"#D46A6A\"><a href=\"http://webst.cjcu.edu.tw/~107b15779/web/manager/manager_home.php\">~點擊這裡進入管理頁面~</a><br></font>";
			session_register("root");
			session_register("session_cheak_result");
			session_register("account");
			$_SESSION["session_cheak_result"] = "check_OK" ;
			$_SESSION[account] = $_POST[account];
			$_SESSION[root] = true ;
			exit();
		}
	elseif($pass = true){
		session_register("session_cheak_result");
		session_register("account");
		$_SESSION["session_cheak_result"] = "check_OK" ;
		$_SESSION[account] = $_POST[account];
		echo "<font color=\"red\" size=\"+2\"><b>你已成功登入，5秒後自動進入報名頁面</b></font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/register.php\">";
	}
	
	else{
		echo "<font size=\"+3\" color=\"red\">帳號或密碼錯誤，5秒後將自動返回登入頁面</font>";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://webst.cjcu.edu.tw/~107b15779/web/login.php \">";
		exit();
		}
		

	
	
	
?>	
</center>	


	
	
<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>