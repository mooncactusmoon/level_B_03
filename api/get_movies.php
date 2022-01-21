<?php
include_once "../base.php";
$today=date("Y-m-d");
$ondate=date("Y-m-d",strtotime("-2 days")); //上映日 要在 今天-2天內

$movies=$Movie->all(" where `sh`=1 && `ondate` BETWEEN '$ondate' AND '$today'");

foreach($movies as $movie){
    echo "<option value='{$movie['id']}'>{$movie['name']}</option>";
}