<!-- 這裡用到的概念是連動式選單****重要 -->
<h3 class="ct">線上訂票</h3>
<hr>
<style>
    #order{
        margin: auto;
        width:50%;

    }
    .row{
        display:flex;
    }
    .row .first{
        width:15%;
        text-align: right;
    }
    .row .sec{
        width:85%;
        text-align: left;
    }
    .sec select{
        width:90%;
    }
</style>
<!-- 用spa(後端+前端JS) -->
<div id="order"> 

    <div class="row">
        <div class="first">電影 : </div>
        <div class="sec"><select name="movie" id="movie"></select></div>
    </div>
    <div class="row">
        <div class="first">日期 : </div>
        <div class="sec"><select name="date" id="date"></select></div>
    </div>
    <div class="row">
        <div class="first">場次 : </div>
        <div class="sec"><select name="session" id="session"></select></div>
    </div>
    <div class="row">
        <div class="ct" style="width:100%">
            <button>確定</button>
            <button>重製</button>
        </div>
    </div>

</div>


<script>

let id=(new URL(location)).searchParams.get('id');
getMovies(id)

$("#movie").on("change",()=>{getDays()});

function getMovies(id){
    
    $.get("api/get_movies.php",{id},(movies)=>{
        $("#movie").html(movies);
        getDays();
    });
}

function getDays(){
    let id=$("#movie").val();
    $.get("api/get_days.php",{id},(days)=>{
        $("#date").html(days);
    })
}
</script>