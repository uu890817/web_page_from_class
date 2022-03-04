<?php
session_start();

?>
<center><font size="+2"><b>
<?php
	
	echo "<table>";
	echo "<style>a{ text-decoration:none;color: #56A1FB; }</style>";
	echo "<tr>";
	echo "<td><td>";
	echo "<td><td>";
	echo "　　　　　　　　　　　";
	if($_SESSION[page] == "home"){
		echo "<td><a href=\"home.php\"><font color=\"#124DD8\">首頁</font></a><td>";
	}
	else{
		echo "<td><a href=\"home.php\"><font color=\"#56A1FB\">首頁</font></a><td>";
	};
	
	echo "　　";
	
	if($_SESSION[page] == "register"){
		echo "<td><a href=\"./web/register.php\"><font color=\"#124DD8\">活動報名</font></a><td>";
	}
	else{
		echo "<td><a href=\"./web/register.php\"><font color=\"#56A1FB\">活動報名</font></a><td>";
	};
	
	echo "　　";
	
	if($_SESSION[page] == "photo_view"){
		echo "<td><a href=\"./web/photo_view.php\"><font color=\"#124DD8\">圖片瀏覽</font></a><td>";
	}
	else{
		echo "<td><a href=\"./web/photo_view.php\"><font color=\"#56A1FB\">圖片瀏覽</font></a><td>";
	};
	
	echo "　　";
	
	if($_SESSION[page] == "upload"){
		echo "<td><a href=\"./web/upload.php\"><font color=\"#124DD8\">圖片上傳</font></a><td>";
	}
	else{
		echo "<td><a href=\"./web/upload.php\"><font color=\"#56A1FB\">圖片上傳</font></a><td>";
	};
	
	echo "　　　　　　";
	
	if($_SESSION[page] == "login"){
		echo "<td><a href=\"./web/login.php\"><font color=\"#9A4700\">登入</font></a><td>";
	}
	else{
		echo "<td><a href=\"./web/login.php\"><font color=\"#FFB600\">登入</font></a><td>";
	};
	
	echo "　　";
	
	if($_SESSION[page] == "logout"){
		echo "<td><a href=\"./web/logout.php\"><font color=\"#9A4700\">登出</font></a><td>";
	}
	else{
		echo "<td><a href=\"./web/logout.php\"><font color=\"#FFB600\">登出</font></a><td>";
	};
	
	

	echo "</tr>";
	echo "</table>";
?>
</b></font></center>