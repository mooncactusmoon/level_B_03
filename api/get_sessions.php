<?php
include_once "../base.php";
$movie=$Movie->find($_GET['id']);
$date=$_GET['date'];

$ss=[1=>'14:00~1600',
     2=>'16:00~1800',
     3=>'18:00~2000',
     4=>'20:00~2200',
     5=>'22:00~2400',
];

for($i=1;$i<=5;$i++){
  
    echo "<option value='$i'>{$ss[$i]} 剩餘座位 </option>";
}