




<center>
<?php

$restaurant = array("鮮Q茶館","BON ONE","128餐飲","ABC Burger","大翔","曾賀","M丼","找學長","326臭臭鍋","森丼","小頭鍋","三媽","宮本五丼","天滿橋","肉丼丼","丹丹","九湯屋");

srand((double)microtime()*1000000);
$restaurant_count = array_count_values($restaurant);
$restaurant_count = rand(0,$restaurant_count);



?>