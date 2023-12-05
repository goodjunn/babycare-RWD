<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style>
/* CLEARFIX */
.clearfix:after {content: "."; display: block; height: 0; clear: both; visibility: hidden;}
.clearfix {display: inline-block;}
* html .clearfix { height: 1%;}	
.clearfix {display: block;}	

ul,li{
	list-style-type:none;
	margin:0px;
	padding:0px;
}
body{margin:0; padding:0;}
.page{ width:100%; height:40px; float:left;}
.page ul li{
	width:25px;
	height:25px;
	line-height:25px;
	text-align:center;
	margin:0 5px;
	float:left; 
	border:1px solid #CCC;
	background:#999;
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;}

.page ul li:hover{
	margin:1px 5px;
	background:#F63;
	border:1px solid #F93;
	color:#FCC;
}
.page1{ width:100%; float:left; height:50px;}
.page1 a{
	width:30px;
	height:30px;
	line-height:30px;
	text-align:center;
	margin:0 5px;
	float:left; 
	border:1px solid;
	background:#F69;
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	text-decoration:none;}
.page1 a:hover{
	margin:1px 6px;
	background:#F90;
	border:1px solid #F93;
	color:#FFC;
	}

	
</style>
</head>

<body>
<div class="page";>
<ul>
<li>1</li>
<li>2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
</div>
<div class="page1">
<a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a>
</div>

<!--PHP/For迴圈-->
<div>
<?php
  for($i=1; $i<=10;$i++){
	   echo '<a href="?'.$i.'">'.$i.'</a>';
	  	  }
?>
</div>
</body>
</html>