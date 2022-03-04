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
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">登入</font></h1>
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
	<font size="+2" color="#37ACBF"><b>管理員帳號&nbsp;:&nbsp;admin<br>管理員密碼&nbsp;:&nbsp;12345</b><br></font><br>
	<table bgcolor="#C8FCFF" style="border: 3px #568688 dashed">
		<form action="login_receive.php" method="post">
<?php
			
			#$account_array = array("aaa","bbb","ccc","ddd");
			#$password_array = array("111","222","333","444");
			require("log_backup.php");
			for ($i=0;$i<4;$i++){
				echo "<font size=\"+2\" color=\"#6DD5C6\"><b>";
				echo "帳號".($i+1).":"."$account_array[$i]"."密碼".($i+1).":"."$password_array[$i]"."<br>";
				echo "</b></font>";
				
				
			};
			echo "<br>";
			
?>

<?php
		if ($_SESSION[session_cheak_result] != "check_OK" ){
			echo "<tr><td><font size=\"+2\" color=\"#1E6E7B\">帳號 : </td><td><input type=\"text\" name=\"account\" size=\"20\"></td></tr>";
			echo "<tr><td><font size=\"+2\" color=\"#1E6E7B\" >密碼 : </td><td><input type=\"password\" name=\"password\" size=\"20\"></td></tr></table>";
			echo "<br>";
			echo "<input type=\"submit\" value=\"登入\" size=\"color:#123456\"></form>";
		}
		elseif($_SESSION[root] == true){
			echo "<font size=\"+3\" color=\"#D46A6A\"><a href=\"http://webst.cjcu.edu.tw/~107b15779/web/manager/manager_home.php\">~點擊這裡進入管理頁面~</a><br></font>";
		}
		else{
			echo "<font color=\"red\" size=\"+2\"><b>你已經登入了</b></font>";
		}	
			
			
?>			
	
		
</center>
	
<center><b><font size="+1" color=#FFA20B>	
<?php
	echo "<br>";
	srand((double)microtime()*1000000);
	$sentence = rand(0,4);
	$sentence_data = array("人生就像遊樂園，只不過大多數的人都是工作人員","努力不一定會成功，但是不努力會很輕鬆","只要每天省下買一杯奶茶的錢，十天後就能買十杯奶茶","跌倒了站起來，換個好看的姿勢再倒下去","每呼吸60秒，就減少一分鐘的壽命");
	echo "$sentence_data[$sentence]";
	echo "<br>";
?>	
</font></b></center>
	
	
	

	
<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>