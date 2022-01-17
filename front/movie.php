<style>
    .movie-list * {
        box-sizing: border-box;
    }

    .movie-list {
        display: flex;
        flex-wrap: wrap;
    }

    .movie-list>div {
        /* > 只有第一層; ~ 同層; ,子孫;  (空白)全部*/
        width: 49%;
        margin: 0.5%;
        border: 1px solid white;
        border-radius: 5px;
    }
</style>
<div class="half">
    <h1>院線片清單</h1>
    <div class="rb tab" style="width:95%;">
        <div class="movie-list">
            <?php
            
            $today=date("Y-m-d");
            $ondate=date("Y-m-d",strtotime("-2 days")); //上映日 要在 今天-2天內
            $rows=$Movie->all(" where `sh`=1 && `ondate` BETWEEN '$ondate' AND '$today' Order By `rank`");
            foreach ($rows as $key => $row) {


            ?>
                <div>
                    <div>片名:<?=$row['name'];?></div>
                    <div style="display:flex;">
                        <div>
                            <img src="img/123.png" alt="">
                        </div>
                        <div>
                            <div>分級:</div>
                            <div>上映日期:</div>
                        </div>
                    </div>
                    <div></div>
                    <div>
                        <button>電影簡介</button>
                        <button>線上訂票</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="ct">
            < 1 2 3>
        </div>
    </div>
</div>