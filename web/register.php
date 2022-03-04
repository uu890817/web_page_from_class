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
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">活動報名</font></h1>
</center>


<hr width="25%" color="Green">

<!-- 導覽列 -->
<?php require("nav_bar.php") ?>	
<!-- 登入歡迎 -->	
<?php require("../php_Module/login_welcome.php") ?>	
	
<hr width="90%" color="#8cfffb" align="left">

<!-- 時間與IP -->		
<?php require("../php_Module/time_and_ip.php") ?>


	
	
<center><font size="+2"><?php
	$end_date = "2022-01-10 23:59:59";
	echo "<font color=\"#D83B3E\">";
	echo "報名截止日期:".$end_date."<br>" ;
	echo "剩餘時間: ".round((strtotime($end_date)-mktime())/(60*60*24),1)."天";
	echo "</font><br>";
	if (strtotime($end_date)-mktime() < 0 ){
		$time_check = false;
	}
	else{
		$time_check = true;
	}
	
	#echo strtotime($end_date)." ".mktime();
	
	?></cener></font>		
	
	
	
	<?php
		if($_SESSION["session_cheak_result"] == "check_OK"){
			echo "<font size=\"+2\">登入檢查:<font color=\"#00CB9C\">$_SESSION[session_cheak_result]</font></font><br><br>";
		}
		else{
			echo "<font size=\"+2\">登入檢查:"."<font color=\"red\">未登入</font></font><br><br>";
		};
		
	
		if ($_GET["color"] == yellow){
			$color = "bgcolor=\"#FFFED8\" style=\"border: 2px #AF691B solid\"";
		}
		elseif($_GET["color"] == blue){
			$color = "bgcolor=\"#CCD1FF\" style=\"border: 2px #263EFF solid\"";
		}
		else{
			$color = "bgcolor=\"#F2E1FF\" style=\"border: 2px #8157AF solid\"";
		};
		
		echo "<table $color>
		<tr>
			<td><a href=\"http://webst.cjcu.edu.tw/~107b15779/web/register.php?color=purple\"><font size=+2 color=\"#8157AF\"><img src=\"../pic/color/purple.png\" >紫色</font></td>
			<td></td>
			<td><a href=\"http://webst.cjcu.edu.tw/~107b15779/web/register.php?color=blue\"><font size=+2 color=\"#263EFF\"><img src=\"../pic/color/blue.png\">藍色</font></td>
			<td></td>
			<td><a href=\"http://webst.cjcu.edu.tw/~107b15779/web/register.php?color=yellow\"><font size=+2 color=\"#AF691B\"><img src=\"../pic/color/yellow.png\">黃色</font></td>
		</tr>"
	?>	
	
	</table>
</center>









<br>
<center>

<?php
		if ($_GET["color"] == yellow){
			$color = "bgcolor=\"#FFFED8\" style=\"border: 2px #AF691B dashed\"";
		}
		elseif($_GET["color"] == blue){
			$color = "bgcolor=\"#CCD1FF\" style=\"border: 2px #263EFF dashed\"";
		}
		else{
			$color = "bgcolor=\"#F2E1FF\" style=\"border: 2px #8157AF dashed\"";
		};
		
		echo "<table $color>"
			?>
<!-- 
<table  bgcolor="#F2E1FF" style="border: 2px #8157AF dashed">
-->
	<form action="register_receive.php" method="get">
		<tr><td><font size="+2" >名字 <font color="#FF0004">(*必填)</font> : 
			</td><td><input type="text" name="name" size="20"></td></tr>
		<tr><td><font size="+2" >電話 <font color="#FF0004">(*必填)</font>: 
			</td><td><input type="text" name="tel" size="20"></td></tr>
		<tr><td><font size="+2" >性別 : 
			</td><td>
			<input type="radio" name="sex" value="男">男
			<input type="radio" name="sex" value="女">女
			</td></tr>
		<tr><td><font size="+2" >報名場次 : 
			</td><td>
			<input type="radio" name="when" value="11/11">11/11
			<input type="radio" name="when" value="12/12">12/12
		<tr><td><font size="+2" >參加人數 : 
			</td><td>
			<select name=howManyPeople>
            <option value=0 selected >請選擇參加人數</option>
			<option value=1>1</option>
            <option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>
			<option value=5>5</option>
             </select> 人(包含自己，報名費每人1000元)
			</td></tr>
		<tr><td><font size="+2" >是否需要午餐 : 
			</td><td>
			<input type="radio" name="lunch" value="需要">需要(每人$100)
			<input type="radio" name="lunch" value="不需要">不需要
			</td></tr>
			
</table>
	<br>
	<font size="+2">
<?php
		if ($_SESSION[session_cheak_result] == "check_OK" && $time_check == true){
			echo "<input type=\"submit\" value=\"送出報名表\">";
		}
		elseif($_SESSION[session_cheak_result] == "check_OK" && $time_check == false){
			echo "<font color=\"red\"><b>報名時間已過</b></font>";
		}
		else{
			echo "<font color=\"red\"><b>請先登入再報名</b></font>";
		}
	
		
?>		
	</font>
	</form></cener>
	
	
<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>