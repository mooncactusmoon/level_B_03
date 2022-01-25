<?php include_once "../base.php";


//依據ajax傳來的資料來刪除多筆資料
$Ord->del([$_POST['type']=>$_POST['target']]);

/*上例使用switch來的話同下
 switch($_POST['type']){
    case "date":
        $Ord->del(['date'=>$_POST['target']]);
    break;
    case "movie":
        $Ord->del(['movie'=>$_POST['target']]);
    break;
} */


?>