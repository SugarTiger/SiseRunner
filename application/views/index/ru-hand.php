<?php
ini_set('date.timezone','Asia/Shanghai');
include "<?php echo base_url('resource/index'); ?>/form.class.php";
$acttime = time();
if($start=="")
	$start=time();
$acttime = Form::date("acttime", date("Y-m-d H:i:s", $start), 1);
$starttime = Form::date("starttime", date("Y-m-d H:i:s", $start), 1);

if($end!="" && $end !="0")
	$end=date("Y-m-d H:i:s", $end);
else
	$end="";

$endtime = Form::date("endtime", $end, 1);

$ck =  Form::editor("content", "desc", "150", "#FAFAFA");
$color = Form::color("color", "000000");



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, width=device-width"/>
		<title>华软跑族</title>
		<link rel="stylesheet" href="<?php echo base_url('resource/index/css'); ?>/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url('resource/index/css'); ?>/xheader2-css.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('resource/index/css'); ?>/id-card.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('resource/index/css'); ?>/reset.css"/>
		<script src="<?php echo base_url('resource/index/js'); ?>/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url('resource/index/js'); ?>/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
			<style type="text/css">
				.tz11{
	margin:15px 0 0 -35px;
				}
				.article-right1{
				width: 81px;
				height: 100px;
				margin: 15px 40px 0 0px;
				float: right;
.article-ap{
	width:800px;
	height: 160px;
	margin: 0px auto;
	
}
			</style>
	</head>
	<body class="body">
		<!--顶部-->
		<header id="ap-header" class="header">
			<span id="wecome">
				<a href="#">注册</a> | <a href="#">登陆</a>
			</span>
		</header>
		<!--主内容-->
		<div id="allmain" class="container">
			<!--logo 和 搜索框-->
			<header id="top-header" class="row top-header">
				<div id="logo-div" class="logo-div col-md-8">
					<a href="<?php echo site_url('SiseRunHome'); ?>"><img src="<?php echo base_url('resource/index/img'); ?>/logo.png" id="logo-img1"/></a>
					<a href="<?php echo site_url('SiseRunHome'); ?>"><img src="<?php echo base_url('resource/index/img'); ?>/logo.png" class="img-responsive center-block" id="logo-img2"/></a>
				</div>
				<div id="seo-div" class="col-md-4">
					<div class="input-group search-div">
						<input type="text" class="form-control">
						<span class="input-group-btn">
				        <button class="btn btn-default" type="button">搜索</button>
				      </span>
					</div>
				</div>
			</header>
			<!--logo 和 搜索 end-->
			<!--导航-->
			<!--width大于768px显示导航1-->
			<nav class="navbar navbar-default nav-div" role="navigation">
				<div class="in-nav">
					<div class="navbar-header">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url('SiseRunHome'); ?>">首页</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/about'); ?>">关于跑族</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/appointment'); ?>">我要约</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/onlinerun'); ?>">线上马拉松</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/story'); ?>">跑者故事</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/guidance'); ?>">健康向导</a></li>
							<li><a href="<?php echo site_url('er/ErIndex'); ?>">二货市场</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<!--width小于768px显示导航2-->	
			<div id="in-nav2">
				<nav class="navbar navbar-default nav-div2" role="navigation">
					<div class="navbar-header ">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target="#example-navbar-collapse">
							<span class="sr-only">切换导航</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#" id="nav-title">华软跑族</a>
					</div>
					<div class="collapse navbar-collapse" id="example-navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url('SiseRunHome'); ?>">首页</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/about'); ?>">关于跑族</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/appointment'); ?>">我要约</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/onlinerun'); ?>">线上马拉松</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/story'); ?>">跑者故事</a></li>
							<li><a href="<?php echo site_url('SiseRunHome/guidance'); ?>">健康向导</a></li>
							<li><a href="<?php echo site_url('er/ErIndex'); ?>">二货市场</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<!--导航end-->
			</div>
			<div id="p-main" style="width: 100%;">
				<!--左边start-->
				<section id="s-left">
				<div id="p-left1" >
					<div class="p-img">
						<img src="<?php echo base_url('resource/index/img'); ?>/p-card.jpg"/>
					</div>
					<span id="nickname" class="nickname">昵称：</span><br />
					<span id="nickname"  class="nickname">宣言：</span>
					<div id="nav" class="p-nav">
						<ul>
							<li><a href="#"><img src="<?php echo base_url('resource/index/img'); ?>/user.png"/>我的名片</a></li>
							<li><a href="#"><img src="<?php echo base_url('resource/index/img'); ?>/user.png"/>我的约跑</a></li>
							<li><a href="#"><img src="<?php echo base_url('resource/index/img'); ?>/user.png"/>我的指南</a></li>
						</ul>
					</div>
				</div>
				</section>
				<!--左边end-->
				<!--右边start-->
				
				<div id="p-right1" style="border: 1px solid #BFB7BC;">
					<form action="" method="post">
						<div class="r-h">
						<input type="text" value="活动名称" />
						</div>
						<div id="" style="margin: 70px;">
							<div style="margin-top: 50px;">
							<div class="r-label">
							<label for="hddd" class="r-label1">活动地点：</label>
							<input type="text" id="" value="" size="40" style="width: 250px;height: 30px;"/>
							</div>
							<div class="r-label">
							<label class="r-label1">活动时间：<?php echo $acttime;?> </label>
							<label for="hddd" class="r-label1">持续时间：</label>
							<input type="datetime" id="" value=""  style="height: 30px;"/>
							</div>
							<div class="r-label">
							<label class="r-label1">出发时间： <?php echo $starttime; ?></label>
							<label class="r-label1">结束时间：<?php echo $endtime; ?></label>
							</div>
							</div>
							<div style="margin-left: 20px;height: 200px; ">
							<label for="hddd" class="r-label3">备注：</label>
							<div style="height: 100px;float: left;margin-top: 50px;">
							<textarea name="" rows="10" cols="70" style="height: 100px;" ></textarea>
							</div>
							</div>
							
							<div class="postbuttonbox">
                            	<a class="postblogbutton" href="#">发布约跑</a>
                            </div>
						</div>
					</form>
				</div>
				
	</body>
</html>
