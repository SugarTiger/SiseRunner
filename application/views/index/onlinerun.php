<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>线上马拉松</title>
	<link rel="stylesheet" href="<?php echo base_url('resource/css'); ?>/onlinerun-css.css" />
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
					<!-- 轮播（Carousel）指标 -->
					<ol class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
					</ol>

					<!-- 轮播（Carousel）项目 -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo base_url('resource/img'); ?>/onlinerun_r2_c2.gif" alt="banner"></div>
						<div class="item">
							<img src="<?php echo base_url('resource/img'); ?>/onlinerun_r2_c2.gif" alt="banner"></div>
						<div class="item">
							<img src="<?php echo base_url('resource/img'); ?>/onlinerun_r2_c2.gif" alt="banner"></div>
					</div>

					<!-- 轮播（Carousel）导航 -->
					<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!--导航-->
				<div class="mynav">
					<ul class="nav nav-pills">
						<li>
							<a href="#">全程</a>
						</li>
						<li>
							<a href="#">半程</a>
						</li>
						<li>
							<a href="#">10KM</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--主内容  列表  开始-->
		<div class="row">
			<div class="col-md-12">
				<div class="main" id="main">
					<div class="smalldiv" id="smalldiv0">
						<div class="circle">1</div>
						<div class="v-line"></div>
						<div class="day">
							周二
							<div class="h-line"></div>
						</div>
						<div class="text">
							<a href="#">
								<h2 class="title">2016温州马拉松</h2>
								<p>
									地点:
									<span>温州市</span>
									起跑时间：
									<span>2016年12月06日 赛事网站</span>
								</p>
								<p>
									项目:
									<span>全程/半程</span>
									规模：
									<span>3000人/4000人/5000人 赛事网站</span>
								</p>
							</a>
						</div>
					</div>
					<div class="smalldiv" id="smalldiv1">
						<div class="circle">2</div>
						<div class="v-line"></div>
						<div class="day">
							周二
							<div class="h-line"></div>
						</div>
						<div class="text">
							<a href="#">
								<h2 class="title">2016温州马拉松</h2>
								<p>
									地点:
									<span>温州市</span>
									起跑时间：
									<span>2016年12月06日 赛事网站</span>
								</p>
								<p>
									项目:
									<span>全程/半程</span>
									规模：
									<span>3000人/4000人/5000人 赛事网站</span>
								</p>
							</a>
						</div>
					</div>
					<div class="smalldiv" id="smalldiv2">
						<div class="circle">3</div>
						<div class="v-line"></div>
						<div class="day">
							周二
							<div class="h-line"></div>
						</div>
						<div class="text">
							<a href="#">
								<h2 class="title">2016温州马拉松</h2>
								<p>
									地点:
									<span>温州市</span>
									起跑时间：
									<span>2016年12月06日 赛事网站</span>
								</p>
								<p>
									项目:
									<span>全程/半程</span>
									规模：
									<span>3000人/4000人/5000人 赛事网站</span>
								</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<p style="text-align: center;" id="footerP">下拉加载更多。。。</p>
		</div>
		<!--主内容  列表  结束-->
	</div>
	<!--页尾-->
	<footer class="col-md-12">
		<div class="row">
			<div class="col-xs-4">
				<h3>
					<a href="#">关于我们</a>
				</h3>
			</div>
			<div class="col-xs-4">
				<h3>友情链接</h3>
				<p>
					<h5>
						<a href="#">广州长跑协会</a>
					</h5>
				</p>
				<p>
					<h5>
						<a href="#">广州马拉松</a>
					</h5>
				</p>
			</div>
			<div class="col-xs-4">
				<h3>联系我们</h3>
				<p>
					<h5>广东省广州市从化区经济开发区高技术产业园广从南路548号</h5>
				</p>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="<?php echo base_url('resource/js'); ?>/onlinerun.js"></script>
</body>
</html>