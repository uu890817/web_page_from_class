<!doctype html>
<?php
session_start();
$_SESSION[page] = "home" ;
?>
<html>
<head>
<meta charset="utf-8">
<title>動態網頁設計上課用</title>
<link rel="icon" href="./pic/icon.png">
</head>

	
<!-- body開始 -->
<body background="./pic/BG.png">

<center>
	<h1><font color="#005555">動態網頁設計</font><font color="#555500">首頁</font></h1>
</center>

	
	
<hr width="25%" color="Green">

<?php require("./php_Module/nav_bar_home.php") ?>
	
<?php require("../php_Module/login_welcome.php") ?>	
<!--
<font size="5pt">我正在上<font size="5pt" color="#00bb77">動態網頁設計</font><br>
<font size="5pt">這是</font><font size="5pt" color="#991122">下一行</font>
-->

<hr width="90%" color="#8cfffb" align="left">

	
<!-- 時間與IP -->		
<?php require("../php_Module/time_and_ip.php") ?>
	
	
<?php
/*	
    echo "<marquee scrollamount=\"20\" width=\"100%\"><font color=\"#00956A\">我是跑馬燈</font></marquee><br>";
	echo "<marquee scrollamount=\"21\" width=\"100%\"><font color=\"#00956A\">我是跑馬燈</font></marquee><br>";
	echo "<marquee scrollamount=\"22\" width=\"100%\"><font color=\"#00956A\">我是跑馬燈</font></marquee><br>";
	
	
	
	
	
	
	if (is_dir("/home/107/jp107a/107b15779/pubhtml/upload/")){
					$handle = opendir("/home/107/jp107a/107b15779/pubhtml/upload/");
					
					$file_png = $_SESSION[account].".png" ;
					$file_jpg = $_SESSION[account].".jpg" ;
					$file_bmp = $_SESSION[account].".bmp" ;
					while ($file = readdir($handle)) {	
						echo $file."<br>" ;
						}
							
	}
	
		
	
	
*/	
	
	
?>

<center>

<font size="+3" color="#90B2F7"><b>公　開　留　言　板<b></font><br>
<font size="+1" color="#90B2F7"><b>(輸入 <font color="#F7909A">clear</font> 可以清除留言板)<b></font><br><br>	
<form action="./home.php" method="post">
	<font size="+1" color="#A36D00"><b>發送你的留言:　<b></font>
	<?php 
		
		if($_SESSION["session_cheak_result"] != "check_OK"){
			echo "<br><font size=\"+2\" color=\"red\">登入後才可使用</font>";
			
		}
		else{
			echo "<input type=\"text\" name=\"write_word\" size=\"20\">";
			echo "　";
			echo "<input type=\"submit\" value=\"以　$_SESSION[account]　身分留言\">";
		}
	
		
		echo "</form>";
		?>	　
		
		
<?php
		
		
		echo "<br>";
		echo "<br><font size=\"+2\" color=\"#3677FB\">留言內容</font>";
		if ($_POST[write_word] == "clear"){
			$write_word = fopen("./upload/write_word.txt","w");
		}
		else{
			$write_word = fopen("./upload/write_word.txt","a");
		}
	
		
		if($_POST[write_word] != null && $_POST[write_word] != "clear" && $_SESSION["session_cheak_result"] == "check_OK"){
			fputs($write_word , $_SESSION[account]."說　:　".$_POST[write_word]."\r\n"); //將新資料寫進檔案
			fclose($write_word);
			echo "<meta http-equiv=\"refresh\" content=\"0.1;url=http://webst.cjcu.edu.tw/~107b15779/\">"; //避免重複輸入相同資料
		}
		
	
		echo "<br>";
	
		$read_word=fopen("./upload/write_word.txt","r");
		while($line=fgets($read_word)){
                  echo $line."<br>";
				}	
		fclose($read_word);
	
		?>		
</center>	
	
<br>
<br>	
<br>	
<br>	
<br>	
<br>	
	
<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>