<!doctype html>
<?php
session_start();
$_SESSION[page] = "home" ;
?>
<html><head>
<meta charset="utf-8">
<title>找餐廳?　Impossible</title>
<link rel="icon" href="./pic/icon.png">
</head>

	
<!-- body開始 -->
<body background="./pic/BG.png">

<center>
	<b><h1><font color="#005555">今 天 吃 啥</font><font color="#009A4B"> 網 頁 版</font></h1></b>
</center>

<hr width="25%" color="Green">
	
<!-- 時間與IP -->		
<?php require("../php_Module/time_and_ip.php") ?>
	
	
<font size="+3" color="#FF5B5E"><b><a href="home.php" style="text-decoration:none;color:#FF5B5E; background: #FBF1FF">~ 點我重來 ~</a></b></font><br><br>
	
<center><font size="+3" color="#39B8AC"><b>
<?php

$restaurant = array("鮮Q茶館","BON ONE","128餐飲","ABC Burger","大翔","曾賀","M丼","找學長","326臭臭鍋","森丼","小石鍋","三媽","宮本五丼","天滿橋","肉丼丼","丹丹","九湯屋","安娜巴比Q","樂檸漢堡");
$menu_01 = array(
	"https://cdn.discordapp.com/attachments/928193085698097163/928193274139791400/Q.jpg",#鮮Q茶館
	"https://cdn.discordapp.com/attachments/928193085698097163/928194711871717416/BON_ONE.jpg",#BON ONE
	"https://cdn.discordapp.com/attachments/928193085698097163/928194994311954492/128.png",#128餐飲
	"https://cdn.discordapp.com/attachments/928193085698097163/928195026759090226/ABC_BURGER.jpg",#ABC Burger
	"https://cdn.discordapp.com/attachments/928193085698097163/928195442087440414/ae5c93554a6ed77d.jpg",#大翔
	"https://cdn.discordapp.com/attachments/928193085698097163/928195955008880680/4bd753dc7ce3b250.jpg",#曾賀
	"https://cdn.discordapp.com/attachments/928193085698097163/928196569839337482/M.jpg",#M丼
	"https://cdn.discordapp.com/attachments/928193085698097163/928196829928116234/245185579_4721421457908609_4583156077422104253_n.png",#找學長
	"https://cdn.discordapp.com/attachments/928193085698097163/928197289946787840/326.jpg",#326臭臭鍋
	"https://cdn.discordapp.com/attachments/928193085698097163/928197764326780928/b78f484221bc955e.jpg",#森丼
	"https://cdn.discordapp.com/attachments/928193085698097163/928198019323691058/10f55772b7cddecd.jpg",#小石鍋
	"https://cdn.discordapp.com/attachments/928193085698097163/928198154229276683/17e4ef25bd1b61f3.jpg",#三媽
	"https://cdn.discordapp.com/attachments/928193085698097163/928199713013006336/de9aabee3205cedf.jpg",#宮本五丼
	"https://cdn.discordapp.com/attachments/928193085698097163/928200009344774175/e33ee64fd5c86fb4.jpg",#天滿橋
	"https://cdn.discordapp.com/attachments/928193085698097163/928200615207768084/ae456e5073ed8a65.jpg",#肉丼丼
	"https://cdn.discordapp.com/attachments/928193085698097163/928202134510510111/d8ff9119eb636d03.jpeg",#丹丹
	"https://cdn.discordapp.com/attachments/928193085698097163/928202435921600543/91519ba00a0da76c.jpg",#九湯屋
	"https://lh5.googleusercontent.com/p/AF1QipND6Ruhq0bwn_BX9a-y3XZpQumoIKwTlopW5lD2=w750-h1235-p-k-no",#安娜巴比Q
	"https://cdn.discordapp.com/attachments/928193085698097163/928921699532038154/155.png",#樂檸漢堡
	
);
	
$menu_02 = array(
	"",#鮮Q茶館
	"",#BON ONE
	"",#128餐飲
	"",#ABC Burger
	"",#大翔
	"",#曾賀
	"",#M丼
	"",#找學長
	"",#326臭臭鍋
	"",#森丼
	"",#小石鍋
	"",#三媽
	"",#宮本五丼
	"https://cdn.discordapp.com/attachments/928193085698097163/928200378971996220/2.jpg",#天滿橋
	"",#肉丼丼
	"",#丹丹
	"",#九湯屋
	"",#安娜巴比Q
	"",#樂檸漢堡
	
);

$words = array("吃","可以參考看看","我想吃","今天想要","我只想的到","不要想了，去");
	
	
srand((double)microtime()*rand(1,10000000));
$restaurant_count = count($restaurant) - 1;
$words_count = count($words) - 1;
$restaurant_count = rand(0,$restaurant_count);
$words_count = rand(0,$words_count);
#echo $restaurant_count;
echo $words[$words_count]."<font color=\"#C047BD\">".$restaurant[$restaurant_count]."</font>";
if($menu_01[$restaurant_count] != ""){
	$menu_1 = $menu_01[$restaurant_count];
	echo "<br>";
	echo "<a href=\"$menu_1\" target=\"_blank\"><img src=\"$menu_1\" width=\"600pt\"></a>";
};
echo "　";
if($menu_02[$restaurant_count] != ""){
	$menu_2 = $menu_02[$restaurant_count];
	echo "<a href=\"$menu_2\" target=\"_blank\"><img src=\"$menu_2\" width=\"600pt\"></a>";
};

	
	
	
	
	
?>
</b></font></center>
	
	
	
	
	
<br>
<br>	
<br>	
<br>	
<br>	
<br>	
	
<hr width="90%" color="00ccdd">
<center><font size="3pt" color="#00ccff">&copy; 2021 謝博裕</font></center>
</body>
</html>