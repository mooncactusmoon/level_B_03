<?php
include_once "../base.php";

$movie=$Movie->find($_POST['id']);
/* 一般寫法
if($movie['sh']==1){
    $movie['sh']=0;
}else{
    $movie['sh']=1;
}*/

$movie['sh']=($movie['sh']+1)%2; //炫技寫法

$Movie->save($movie);