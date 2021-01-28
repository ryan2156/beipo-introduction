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
      article {
        position: absolute;
        margin: 8% 20%;
        width: 60%;
        height: 100%;
        background-color: #CC5;
        font-family: "微軟正黑體";
      }
      .section1{
        position: relative;
        margin: 10% auto;
        padding: 5px;
        width: 80%;
        height: 20%;
        background: rgba(22,80,60)
      }
      .section-img{
        position: relative;
        width:20%;float: left;
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
    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">柿餅機功能</a></li>
          <li><a href="#">柿餅</a></li>
          <li><a href="#">產品介紹</a></li>
          <li><a href="#">關於我們</a></li>
          <li><a href="http://localhost/introduct/restart.php">首頁</a></li>
        </ul>
      </nav>
    </header>
    <article>
      <section class="section1">
        <span class="section1jpg"><img src="img-jpg/pic1.jpg" class="img">
      </section>
    </article>
  </body>
</html>
