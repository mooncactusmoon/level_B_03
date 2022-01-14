<?php include_once "../base.php";
//dd($_POST);
if(isset($_FILES['trailer']['tmp_name'])){
    $_POST['trailer']=$_FILES['trailer']['name'];
    move_uploaded_file($_FILES['trailer']['tmp_name'],"../img/".$_POST['trailer']);
}

if(isset($_FILES['poster']['tmp_name'])){
    $_POST['poster']=$_FILES['poster']['name'];
    move_uploaded_file($_FILES['poster']['tmp_name'],"../img/".$_POST['poster']);
}

//$_POST['ondate']=$_POST['year']. "-".$_POST['month']."-".$_POST['day'];
$_POST['ondate']=join("-",[$_POST['year'],$_POST['month'],$_POST['day']]);
$_POST['rank']=$Movie->math('max','id')+1;
$_POST['sh']=1;
unset($_POST['year']);
unset($_POST['month']);
unset($_POST['day']);
dd($_POST);
$Movie->save($_POST);
to("../back.php?do=movie");

// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片2', '1', '123', '2022-01-15', '院線片2發行', '院線片2導演', '03B02v.mp4', '03B02.png', '院線片2', '1', '1');
// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片3', '1', '123', '2022-01-15', '院線片3發行', '院線片3導演', '03B03v.mp4', '03B03.png', '院線片3', '1', '1');
// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片4', '1', '123', '2022-01-15', '院線片4發行', '院線片4導演', '03B04v.mp4', '03B04.png', '院線片4', '1', '1');
// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片5', '1', '123', '2022-01-15', '院線片5發行', '院線片5導演', '03B05v.mp4', '03B05.png', '院線片5', '1', '1');
// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片6', '1', '123', '2022-01-15', '院線片6發行', '院線片6導演', '03B06v.mp4', '03B06.png', '院線片6', '1', '1');
// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片7', '1', '123', '2022-01-15', '院線片7發行', '院線片7導演', '03B07v.mp4', '03B07.png', '院線片7', '1', '1');
// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片8', '1', '123', '2022-01-15', '院線片8發行', '院線片8導演', '03B08v.mp4', '03B08.png', '院線片8', '1', '1');
// INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES (NULL, '預告片9', '1', '123', '2022-01-15', '院線片9發行', '院線片9導演', '03B09v.mp4', '03B09.png', '院線片9', '1', '1');