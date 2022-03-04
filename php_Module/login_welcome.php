<?php
	$date = date('Y/m/d');
	$hour = date('H');
	$minute = date('i')+13;
	$time = " ，早上好";
	if ($minute>59){
		$minute = $minute - 60 ;
		$hour = $hour + 1 ;
		};
	if($hour >= 12){
		$time = " ，下午好";
	};
	if($_SESSION[session_cheak_result] == "check_OK"){
		echo "<font color=\"#2C84A8\" size=\"+1\"><b>";
		echo "　　　　　使用者 ";
		echo "<font color=\"#C975D8\" size=\"+1\">";
		echo $_SESSION[account];
		echo "</font>";
		echo $time;
		echo "</b></font>";
	}
	else{
		echo "";
	}
	?>