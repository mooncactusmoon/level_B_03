<?php
include_once "../base.php";
$movie=$Movie->find($_GET['id']);
$finaldate=strtotime("+2 days",strtotime($movie['ondate']));
$gap=($finaldate-strtotime(date("Y-m-d")))/(60*60*24); //前面是秒數所以後面要轉回日期

for($i=0;$i<=$gap;$i++){
    $date=date("Y-m-d",strtotime("+$i days")); //0表今天 1明天 2後天
    $dateShow=date("m月d日 l",strtotime("+$i days")); //l星期
    echo "<option value='$date'>$dateShow</option>";
}