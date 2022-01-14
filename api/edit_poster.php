<?php include_once "../base.php";

foreach($_POST['id'] as $key => $id){
    if(isset($_POST['id']) && in_array($id,$_POST['del'])){
        $Poster->del($id);
    }else{
        $po=$Poster->find($id);
        $po['name']=$_POST['name'][$key];
        $po['ani']=$_POST['ani'][$key];
        $po['sh']=(isset($_POST['id']) && in_array($id,$_POST['sh']))?1:0;
        
        $Poster->save($po);

    }
    
}
to("../back.php?do=poster");


?>