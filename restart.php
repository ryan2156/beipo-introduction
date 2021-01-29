<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      header nav{
        margin: 3px;
        width: 100%;
        height: 80px;
        background: rgba(0, 0, 0, 0.3);
        position: absolute;
      }
      header nav ul{
        list-style: none;
        margin: 10px;
        padding: 0;
      }
      header nav ul li{
        text-align: center;
        float: right;
        line-height: 60px;
      }
      header nav ul li a{
        width: 100px;
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        display: block;
      }
      header nav ul li a:hover,header nav ul li a:visited{
        text-decoration: none;
        background-color: rgba(255, 0, 0, 0.5);
        color: #fff;
      }
      #headerleft{
        text-align: center;
        float: left;
        color: #00E6E6;
        font: italic normal bolder 2em/60px '微軟正黑體';
      }
      article {
        position: absolute;
        margin: 8% 15%;
        width: 70%;
        height: 100%;
        background-color: #CC5;
        font-family: "微軟正黑體";
        color: rgb(255, 255, 255);

      }
      .section1{
        position: relative;
        margin: 10% auto;
        padding: 5px;
        width: 70%;
        height: 20%;
        background: rgba(22,80,60);0..
        text-align: top;
      }
      .section2{
        position: relative;

      }
      .sectionimg{
        position: relative;
        width:auto;float: left;
        height: 100%;
        background:#CD2;
      }
      .img{
        max-height: 100%;
        max-width: 100%;
        width: auto;
        height: auto;
        position: relative;
        top: 0;
        left: 0;
        margin: auto;
        float: left;
      }
      .con{
        width: 10px;
        height:100%;
        float: left;
      }
      #section2font{
        max-width: 55%;
        max-height: 100%;
        float: left;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li id="headerleft">北埔社區創生計畫</li>
          <li><a href="http://localhost/introduct/machine.php">柿餅機介紹</a></li>
          <li><a href="#">柿餅</a></li>
          <li><a href="#">關於我們</a></li>
          <li><a href="http://localhost/introduct/restart.php">首頁</a></li>
        </ul>
      </nav>
    </header>
    <article>
      <section class="section1"><!--第一段-->
        <img src="img-jpg/pic1.jpg"class="sectionimg">
        <div class="con"></div>
          <h2>自動曬柿餅機的移動部分</h2>
          <p>
            這是目前的移動機構，採用的是麥克納姆輪，優點為穩定平台減少
            因為轉彎而造成的搖晃，缺點為輪胎不平，會有震動。
          </p>
      </section>
      <section class="section1"><!--第二段-->
        <div id="section2font">
          <h2>北埔曬柿餅文化的難題</h2>
          <p>
            隨著北埔青壯年人口的外移加上當地人口老化，
            人力資源極度匱乏，不足以應付柿餅產業所需的勞動力，
            使得北埔的傳統文化逐漸式微。
          </p>
        </div>
        <img src="img-jpg/mainmenu2.jpg" class="sectionimg">
      </section>
    </article>
  </body>
</html>
