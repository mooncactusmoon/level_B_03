<?php
include_once "../base.php";

$movies=$Ord->q("select `movie` from `ord` group by `movie`");
foreach($movies as $movie){
    echo "<option value='{$movie['movie']}'>";
    echo $movie['movie'];
    echo "</option>";
}

?>