<button onclick="location.href='?do=add_movie'">新增電影</button>
<hr>
<div style="overflow:auto;height:420px;">
<?php
$mos=$Movie->all(" ORDER BY rank");

foreach($mos as $key => $movie){

?>
<div style="display:flex;width:100%;background:white;margin:3px 0;">
    <div style="width:15%">
        <img src="img/<?=$movie['poster'];?>" style="width:100px">
    </div>
    <div style="width:10%">
        分級: <img src="icon/<?=$movie['level'];?>.png">
    </div>
    <div style="width:75%">
        <div style="display:flex;">
            <div style="width:33%">片名:<?=$movie['name'];?></div>
            <div style="width:33%">片長:<?=$movie['length'];?></div>
            <div style="width:33%">上映時間:<?=$movie['ondate'];?></div>
        </div>
        <div style="text-align:right">
            <button>顯示</button>
            <button>往上</button>
            <button>往下</button>
            <button onclick="location.href='?do=edit_movie&id=<?=$movie['id'];?>'">編輯電影</button>
            <button onclick="del('movie',<?=$movie['id'];?>)">刪除電影</button>
        </div>
        <div>劇情介紹:<?=$movie['intro'];?></div>
    </div>
</div>
<?php
}

?>
</div>