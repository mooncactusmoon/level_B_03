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

            //分頁
            $all = $Movie->math("count", "*"," where `sh`=1 && `ondate` BETWEEN '$ondate' AND '$today'");
            $div = 4; //一頁幾個
            $pages = ceil($all / $div); //要有幾頁
            $now = $_GET['p'] ?? 1; //預設從第一頁開始
            $start = ($now - 1) * $div; //每一頁從誰開始

            $rows=$Movie->all(" where `sh`=1 && `ondate` BETWEEN '$ondate' AND '$today' Order By `rank` limit $start,$div");
            foreach ($rows as $key => $row) {

            // echo 'ondate'.$ondate;
            // echo 'today'.$today;
            ?>
                <div>
                    <div>片名:<?=$row['name'];?></div>
                    <div style="display:flex;">
                        <div>
                            <img src="img/<?=$row['poster'];?>" alt="" width="50px" height="50px">
                        </div>
                        <div>
                            <div>分級:<?=$row['level'];?></div>
                            <div>上映日期:<?=$row['ondate'];?></div>
                        </div>
                    </div>
                    <div></div>
                    <div>
                        <button>電影簡介:</button>
                        <button>線上訂票</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="ct">
        <?php
        if (($now - 1) > 0) {
            $prev = $now - 1;
            echo "<a href='?p=$prev'>";
            echo "<";
            echo "</a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $font = ($now == $i) ? '24px' : '16px';
            echo "<a href='?p=$i' style='font-size:$font'>";
            echo $i;
            echo "</a>";
        }
        if (($now + 1) <= $pages) {
            $next = $now + 1;
            echo "<a href='?p=$next'>";
            echo ">";
            echo "</a>";
        }
        ?>
        </div>
    </div>
</div>