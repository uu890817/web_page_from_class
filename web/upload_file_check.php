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

<font size="+3" color="#DB3538">
<?php	
if($_FILES['upload_file']['error'] > 0){
	switch($_FILES['upload_file']['error']){
	 	case 1 : die("檔案大小超出伺服器端上傳限制"); //本函數送出字符串到瀏覽器並中斷PHP程序(Script)。
		case 2 : die("檔案大小超出表單能傳送之 MAX_FILE_SIZE 限制");
		case 3 : die("檔案僅被部分上傳");
		case 4 : die("檔案未被上傳");
	}
}	
?>
</font>

<center>
	<font size="+3" color="#5BC3E3">
	<table bgcolor="#EAF9FF" style="border: 2px #1BAFA8 solid">
		<tr><td colspan="2"><b><center>上傳檔案資訊</center></b></td></tr>
		<tr><td>檔案名稱:</td><td><?php echo $_FILES['upload_file']['name'] ?></td><tr>
		<tr><td>檔案大小:</td><td><?php echo $_FILES['upload_file']['size'] ?></td><tr>
		<tr><td>檔案格式:</td><td><?php echo $_FILES['upload_file']['type'] ?></td><tr>
		<tr><td>檔案名稱:</td><td><?php echo $_FILES['upload_file']['tmp_name'] ?></td><tr>
		<tr><td>檔案代碼:</td><td><?php echo $_FILES['upload_file']['error'] ?></td><tr>
	</table>
	</font>
	
	<br>
	
	<font size="+3" color="#5BC3E3">
	<table bgcolor="#EAF9FF" style="border: 2px #1BAFA8 solid">
		<tr><td colspan="2"><b><center>上傳檔案檢查</center></b></td></tr>
		<tr><td>檔案格式:</td><td><?php if($_FILES['upload_file']['type'] == "image/png" || $_FILES['upload_file']['type'] == "image/jpeg" || $_FILES['upload_file']['type'] == "image/bmp"){ echo "<font size=\"+3\" color=\"#1FB873\">檔案格式正確</font>"; } else{ echo "<font size=\"+3\" color=\"#F8405D\">請上傳BMP、JPG或PNG格式</font>"; }  ?></td><tr>
		<tr><td>檔案大小:</td><td><?php if($_FILES['upload_file']['size'] < 1000000 ){ echo "<font size=\"+3\" color=\"#1FB873\">檔案大小正確</font>"; } else{ echo "<font size=\"+3\" color=\"#F8405D\">請上傳小於1MB的圖片檔案</font>"; } ?></td></tr>
	</table>
		<?php 
			if(is_dir("/home/107/jp107a/107b15779/pubhtml/upload/") == true){
				echo "檔案上傳中";	
			}
			else{
				echo "目的資料夾錯誤，請聯絡網站管理員";
		};
		if($_FILES['upload_file']['type'] == "image/png"){
			$type = ".png";
		}
		elseif($_FILES['upload_file']['type'] == "image/jpeg"){
			$type = ".jpg";
		}
		else{
			$type = ".bmp";
		};
		if(is_uploaded_file($_FILES['upload_file']['tmp_name'])){
			$upload_forder = "/home/107/jp107a/107b15779/pubhtml/upload/".$_SESSION[account].$type;
			move_uploaded_file($_FILES['upload_file']['tmp_name'] , $upload_forder);
		}
		
		?>
		
	</font>
</center>	

<br>

<hr width="90%" color="00ccdd" align="right">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>