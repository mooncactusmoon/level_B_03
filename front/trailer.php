<style>
  .list *,.controls *{
    box-sizing: border-box;
  }
  .lists{
    width: 210px;
    height: 260px;
    margin: auto;
    background: white;
  }
  .controls{
    display:flex;
    margin:auto;
    width:380px;
    align-items:center;
  }
  .icons{
    display:flex;
    width: 320px;
    height: 90px;
    background:turquoise;
  }
  .icon{
    width:80px;
    height:20px;
    background:wheat;
  }
  .left,.right{
    width:30px;
  }
</style>
<div class="half" style="vertical-align:top;">
      <h1>預告片介紹</h1>
      <div class="rb tab" style="width:95%;">
      <!-- 把這裡原有的ID拿掉 自己刻CSS 把ul改成div -->
        <div>
          <div class="lists">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>

          <div class="controls">
            <div class="left">left</div>
            <div class="icons">
              <div class="icon">1</div>
              <div class="icon">2</div>
              <div class="icon">3</div>
              <div class="icon">4</div>
            </div>
            <div class="right">right</div>
          </div>
        </div>
      </div>
      </div>