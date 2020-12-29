<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset = "utf-8">
</head>
<style type="text/css">
	nav{
		width: 100%;
		height: 60px;
		background: rgba(0,0,0,.3);
		position: absolute;
		z-index: 10;
	}
	nav ul{
		list-style: none;
		margin: 0;
		padding: 0;
	}
	nav ul li{
		text-align: center;
		float: left;
		line-height: 60px;
	}
	nav ul li a{
		width: 100px;
		color: #fff;
		font-size: 20px;
		font-weight: 600;
		display: block;
	}
	nav ul li a:hover,nav ul li a:visited{
		text-decoration: none;
		background: rgba(0,0,0,.5);
		color: #fff;
	}
	.words{font-size: 40px;
			letter-spacing: 10px;
			position: absolute;
			top:50%;
			left: 30%;}
	.imgw{position: relative;}
</style>
<body>
	<nav>
		<ul>
			<li class="active"><a href="#">首页</a></li>
			<li><a href="#">服务</a></li>
			<li><a href="#">支持</a></li>
			<li><a href="#">博客</a></li>
			<li><a href="#">下载</a></li>
		</ul>
	</nav>
	<div class="imgw">
		<img src="images/header1.png" alt= "" width="100%">
		<div class="words">飞流太萌了</div>
	</div>
</body>
</html>
