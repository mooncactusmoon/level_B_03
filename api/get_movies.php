<?php
include_once "../base.php";
$id=$_GET['id'];
$today=date("Y-m-d");
$ondate=date("Y-m-d",strtotime("-2 days")); //上映日 要在 今天-2天內

$movies=$Movie->all(" where `sh`=1 && `ondate` BETWEEN '$ondate' AND '$today'");

foreach($movies as $movie){
    $selected=($movie['id']==$id)?"selected":"";
    echo "<option value='{$movie['id']}' $selected>{$movie['name']}</option>";
}