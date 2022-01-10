<?php include_once "../base.php";

if(isset($_FILES['path']['tmp_name'])){
    $data['path']=$_FILES['path']['name'];
    move_uploaded_file($_FILES['path']['tmp_name'],'../img/'.$data['path']);
    $data['name']=$_POST['name'];
    $maxid=$Poster->math('max','id');
    $data['rank']=$maxid+1;
    $Poster->save($data);

}

to("../back.php?do=poster");

// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A01.jpg', '預告片1', '1', '1', '1');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A02.jpg', '預告片2', '2', '2', '2');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A03.jpg', '預告片3', '3', '3', '3');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A04.jpg', '預告片4', '4', '4', '1');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A05.jpg', '預告片5', '5', '5', '2');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A06.jpg', '預告片6', '6', '6', '3');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A07.jpg', '預告片7', '7', '7', '1');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A08.jpg', '預告片8', '8', '8', '2');
// INSERT INTO `poster` (`id`, `path`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A09.jpg', '預告片9', '9', '9', '3');