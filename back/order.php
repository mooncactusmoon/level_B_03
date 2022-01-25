<h3 class='ct'>訂票清單</h3>
<style>
/*設定標題列及資料列的排列方式*/
.ord-header,
.ord-list div{
    width:100%;
    display:flex;
    align-items:center;
}

/*設定每一個欄位的呈現方式*/
.ord-header span,
.ord-list div span
{
    flex:1; /*在一個flex的橫列中這一個元素要佔的空間量*/
    background:#eee;
    text-align: center;
    margin:0 1px;
}
/*針對清單區有一個高度的限制，並允許有滾軸*/
.ord-list{
    overflow:auto;
    height:350px;
}

/*清單區的每一筆資料底色都是白色*/
.ord-list div span{
    background:white;
}

</style>
<div>
    快速刪除：
    <input type="radio" name="type"  value='date'>依日期
    <input type="text" name="date" id="date">
    <input type="radio" name="type"  value='movie'>依電影
    <select name="movie" id="movie"></select>
    <button onclick='qDel()'>刪除</button>
</div>
<div class='ord-header'>
    <span>訂單編號</span>
    <span>電影名稱</span>
    <span>日期</span>
    <span>場次時間</span>
    <span>訂購數量</span>
    <span>訂購位置</span>
    <span>操作</span>
</div>
<div class='ord-list'>
    <?php
        $ords=$Ord->all(" order by no DESC");
        foreach($ords as $ord){
    ?>
    <div>
        <span><?=$ord['no'];;?></span>
        <span><?=$ord['movie'];;?></span>
        <span><?=$ord['date'];;?></span>
        <span><?=$ord['session'];;?></span>
        <span><?=$ord['qt'];;?></span>
        <span>
    <?php        
            $seats=unserialize($ord['seat']) ;
            foreach($seats as $seat){
                echo  (floor($seat/5)+1). "排".($seat%5 +1)."號";
                echo "<br>";
             }
       ?>     
        </span>
        <span>
            <button onclick="del('ord',<?=$ord['id'];?>)">刪除</button></span>
    </div>
    <hr>
    <?php
    }
    ?>
</div>


<script>
    $("#movie").load("api/get_ord_movies.php");
    
    function qDel(){
    //先取得目前被選中要刪除的項目
    let type=$("input[name='type']:checked").val();

    //取得要刪除的項目的值
    let target=$("#"+type).val()
    
/*上列程式如果使用switch來寫如下:

     switch(type){
        case "date":
            target=$("#date").val();
        break;
        case "movie":
            target=$("#movie").val();
        break;
    } */

    //建立確認用的彈出視窗，依照回應true或false來進行下一步
    let check=confirm(`確定要刪除${target}的所有訂單嗎?`);
    if(check){

        //使用ajax的方式向api傳送要刪除的項目及目標值
        $.post("api/qdel.php",{type,target},()=>{

            //刪除完成後重新載入頁面
            location.reload()
        })
    }
}
</script>