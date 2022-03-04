<!-- PHP資訊 -->
<br>


<center><table style="border:3px #8CE0FF solid;" bgcolor="#FFFFFF">
	<tr>
		<td>
			<?php 
				$date = date('Y/m/d');
				$hour = date('H');
				$minute = date('i')+13;
				if ($minute>59){
					$minute = $minute - 60 ;
					$hour = $hour + 1 ;
				}
				echo "<center><font size=\"6\" color=\"#5FA3E0\">&nbsp現在時間 :  $date $hour 點 $minute 分 &nbsp&nbsp</font><br></center>";
			?>
			
		</td>
		<td>
			<?php 
				$ip = $_SERVER['REMOTE_ADDR'];
				echo "<center><font size=\"6\" color=\"#5FA3E0\">你的IP: $ip&nbsp</font><br></center>";
			?>
		</td>
	</tr>
</table></center><br>
	
<center>