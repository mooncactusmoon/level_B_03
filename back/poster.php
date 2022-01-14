<div>
    <h4 class="ct">預告片清單</h4>
    <div style="display:flex;" class="ct">
        <div style="width:25%;background:#eee">預告片海報</div>
        <div style="width:25%;background:#eee">預告片片名</div>
        <div style="width:25%;background:#eee">預告片排序</div>
        <div style="width:25%;background:#eee">操作</div>
    </div>
    <form action="api/edit_poster.php" method="post">
        <div style="height:200px;overflow:auto;">
        <?php
        $rows=$Poster->all(" Order by `rank`");
        foreach($rows as $key=> $row){
            $checked=($row['sh']==1)?"checked":"";
            //至少要有兩筆資料，不然下面判斷會壞掉
            if($key==0){
                $up=$row['id']. "-".$row['id'];
                $down=$row['id']."-".$rows[$key+1]['id']; //重要
            }
            if($key==(count($rows)-1)){
                $up=$row['id']."-".$rows[$key-1]['id']; //重要
                $down=$row['id']. "-".$row['id'];

            }
            if($key>0 && $key<(count($rows)-1)){
                $up=$row['id']."-".$rows[$key-1]['id'];
                $down=$row['id']."-".$rows[$key+1]['id'];
            }
        ?>
        <div style="display:flex;" class="ct">
            <div style="width:25%;">
            <img src="img/<?=$row['path'];?>" width="60px">
            </div>
            <div style="width:25%;">
            <input type="text" name="name[]" value="<?=$row['name'];?>">
            </div>
            <div style="width:25%;">
            <!-- 用button才不會被form送出 -->
            <input type="button" value="往上" data-sw="<?=$up;?>"> 
            <input type="button" value="往下" data-sw="<?=$down;?>"> 
            
            </div>
            <div style="width:25%;">
                <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$checked;?>>顯示
                <input type="checkbox" name="del[]" value="<?=$row['id'];?>">刪除
                <select name="ani[]">
                    <option value="1" <?=($row['ani']==1)?"selected":"";?> >淡入淡出</option>
                    <option value="2" <?=($row['ani']==2)?"selected":"";?> >縮放</option>
                    <option value="3" <?=($row['ani']==3)?"selected":"";?> >滑入滑出</option>
                </select>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>" >
            </div>
        </div>
        <?php
        }
        ?>
        </div>
        <div class="ct">
            <input type="submit" value="確定修改">
            <input type="reset" value="重置">
        </div>
    </form>
</div>
<hr>
<div>
    <h4 class="ct">新增預告片海報</h4>
    <form action="api/add_poster.php" method="post" enctype="multipart/form-data">
        <div class="ct">
            <label>
                預告片海報:
                <input type="file" name="path">
            </label>
            <label>
                預告片片名:
                <input type="text" name="name">
            </label>

        </div>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
    </form>
</div>