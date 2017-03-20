<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>约跑活动</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/自适应ap-css.css"/>
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<script src="js/respond.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script>
jQuery(document).ready(function($) {

	$('#login').click(function(){

		$('.loginbox').slideDown(200);

	})
	$('.loginbox .closelb').click(function(){
		$('.loginbox').slideUp(200);
	})
});

</script>
	</head>
	<body class="body">
		<!--顶部-->
		<header id="ap-header" class="header">
			<span id="wecome">
				<a href="re.html">注册</a> | <a href="#" id="login">登陆</a>
			</span>
			<span id="wecome" style="float: right;margin-right: 100px;">
<div class="dropdown">
	<button type="button" class=" dropdown-toggle" id="dropdownMenu1" 
			data-toggle="dropdown">
		欢迎你，<span>sussie</span>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="id-card1.php#side1" style="color: #009945;">个人中心	</a>
		</li>
		<li role="presentation" >
			<a role="menuitem" tabindex="-1" href="id-card1.html#side2" style="color: #009945;">我的约跑</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="id-card1.html#side3" style="color: #009945;">我的指南</a>
		</li>
	</ul>
</div>
			</span>
		</header>
		<!--主内容-->
		<div id="allmain" class="container">
			<!--logo 和 搜索框-->
			<header id="top-header" class="row top-header">
				<div id="logo-div" class="logo-div col-md-8">
					<a href="#"><img src="img/logo.png" id="logo-img1" /></a>
					<a href="#"><img src="img/logo.png" class="img-responsive center-block" id="logo-img2" /></a>
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
							<li>
								<a href="index.html">首页</a>
							</li>
							<li>
								<a href="about.html">关于跑族</a>
							</li>
							<li>
								<a href="appointment.html">我要约</a>
							</li>
							<li>
								<a href="onlinerun.html">线上马拉松</a>
							</li>
							<li>
								<a href="story.html">跑者故事</a>
							</li>
							<li>
								<a href="guidance.html">健康向导</a>
							</li>
							<li>
								<a href="market.html">二货市场</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!--width小于768px显示导航2-->
			<div id="in-nav2">
				<nav class="navbar navbar-default nav-div2" role="navigation">
					<div class="navbar-header ">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
							<span class="sr-only">切换导航</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#" id="nav-title">华软跑族</a>
					</div>
					<div class="collapse navbar-collapse" id="example-navbar-collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="index.html">首页</a>
							</li>
							<li>
								<a href="about.html">关于跑族</a>
							</li>
							<li>
								<a href="appointment.html">我要约</a>
							</li>
							<li>
								<a href="onlinerun.html">线上马拉松</a>
							</li>
							<li>
								<a href="story.html">跑者故事</a>
							</li>
							<li>
								<a href="guidance.html">健康向导</a>
							</li>
							<li>
								<a href="#">二货市场</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!--导航end-->
			<!--轮播图-->
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<div id="box" class="carousel slide" data-ride="carousel">
							<!-- 轮播（Carousel）指标 -->
							<ol class="carousel-indicators">
								<li data-target="#box" data-slide-to="0" class="active"></li>
								<li data-target="#box" data-slide-to="1"></li>
								<li data-target="#box" data-slide-to="2"></li>
							</ol>
							<!-- 轮播（Carousel）项目 -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="img/spot2.jpg" alt="First slide">
									<div class="carousel-caption">
										<p>广东省教职工马拉松健跑活动基地落户华软学院</p>
									</div>
								</div>
								<div class="item">
									<img src="img/run.jpg" alt="Second slide">
									<div class="carousel-caption">
										<p>厦门马拉松开启</p>
									</div>
								</div>
								<div class="item">
									<img src="img/run1.jpg" alt="Third slide">
									<div class="carousel-caption">
										<p>2017年深圳马拉松正式启动</p>
									</div>
								</div>
							</div>
							<!-- 轮播（Carousel）导航 -->
							<a class="carousel-control left" href="#box" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control right" href="#box" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<!--轮播图end-->
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-sm-2">
									<div class="news-title">
										<h2>公告:</h2></div>
								</div>
								<div class="col-sm-5">
									<div class="index-new">
										<ul>
											<li >
												<a href="http://www.runff.com/html/page-8867.html">
													<dd>上海国际马拉松在沪进行</dd><dt>2015-05-09</dt></a>
											</li>
											<li >
												<a href="http://www.runff.com/html/page-8867.html">
													<dd>上海国际马拉松在沪进行</dd><dt>2015-05-09</dt></a>
											</li>
											<li >
												<a href="http://www.runff.com/html/page-8867.html">
													<dd>上海国际马拉松在沪进行</dd><dt>2015-05-09</dt></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="index-new">
										<ul>
											<li class="height">
												<a href="http://www.runff.com/html/page-8867.html">
													<dd>上海国际马拉松在沪进行</dd><dt>2015-05-09</dt></a>
											</li>
											<li class="height">
												<a href="http://www.runff.com/html/page-8867.html">
													<dd>上海国际马拉松在沪进行</dd><dt>2015-05-09</dt></a>
											</li>
											<li class="height">
												<a href="http://www.runff.com/html/page-8867.html">
													<dd>上海国际马拉松在沪进行</dd><dt>2015-05-09</dt></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="run-info">
							<div class="line">
								<span class="pic"></span>
								<span class="info-title"><h3>跑族资讯</h3></span>
								<a href="#" class="more">更多</a>
							</div>
							<div class="index-new">
								<ul>
									<li class="height">
										<a href="new.html">
											<dd>6月9日下午，‘华软跑族’长跑协会正式成立</dd><dt>2015-05-09</dt></a>
									</li>
									<li class="height">
										<a href="new2.html">
											<dd>何大进院长连续四年率“华软跑族”征战广马</dd><dt>2015-05-09</dt></a>
									</li>
									<li class="height">
										<a href="new2.html">
											<dd>广东省教职工马拉松健跑活动基地落户我校华软学院</dd><dt>2015-05-09</dt></a>
									</li>
									<li class="height">
										<a href="new2.html">
											<dd>广大华软70多人“团跑”清远马拉松</dd><dt>2015-05-09</dt></a>
									</li>
								</ul>
							</div>
							<div id="information" class="carousel slide" data-ride="carousel">
								<!-- 轮播（Carousel）指标 -->
								<ol class="carousel-indicators">
									<li data-target="#information" data-slide-to="0" class="active"></li>
									<li data-target="#information" data-slide-to="1"></li>
									<li data-target="#information" data-slide-to="2"></li>
								</ol>
								<!-- 轮播（Carousel）项目 -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="img/spot.jpg" alt="First slide">
									</div>
									<div class="item">
										<img src="img/spot1.jpg" alt="Second slide">
									</div>
									<div class="item">
										<img src="img/1.jpg" alt="Third slide">
									</div>
								</div>
								<!-- 轮播（Carousel）导航 -->
								<a class="carousel-control left" href="#information" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control right" href="#information" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="run-info">
							<div class="line">
								<span class="pic"></span>
								<span class="info-title"><h3>跑者故事</h3></span>
								<a href="#" class="more">更多</a>
							</div>
							<a href="story.html">
								<div class="story-pic"><img src="img/story.jpg" /></div>
								<div class="story-title">跑者故事</div>
								<div class="story-text">
									<p>学院的何大进院长已经年近古稀，但他依然坚持每天长跑5至10公里，
										从2012年至今他已经坚持了整整4年。何院长告诉笔者，年轻时他就喜欢运动</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="run-info">
							<div class="line">
								<span class="pic"></span>
								<span class="info-title"><h3>排行榜</h3></span>
								<a href="rank.html" class="more">更多</a>
							</div>
							<div class="rank">
								<div class="tab">1</div>
								<img src="img/guidance_r4_c2.gif" class="img-head" />
								<div class="rank-text">
									<p class="rank-name">
										用户名：BETTY</p>
									<p>2016-11-29 <span class="long">100</span>KM</p>
									<p><small>运动宣言：在运动中释放自己</small></p>
								</div>
							</div>
							<div class="rank">
								<div class="tab">2</div>
								<img src="img/guidance_r4_c2.gif" class="img-head" />
								<div class="rank-text">
									<p class="rank-name">
										用户名：BETTY</p>
									<p>2016-11-29 <span class="long">100</span>KM</p>
									<p><small>运动宣言：在运动中释放自己</small></p>
								</div>
							</div>
							<div class="rank">
								<div class="tab">3</div>
								<img src="img/guidance_r4_c2.gif" class="img-head" />
								<div class="rank-text">
									<p class="rank-name">
										用户名：<span>BETTY</span></p>
									<p>2016-11-29 <span class="long">100</span>KM</p>
									<p><small>运动宣言：在运动中释放自己</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 col-sm-12">
						<div class="appiontment">
							<div class="app-title">
								<h3>我们约跑吧 </h3>
								<span class="more"><a href="#">more+</a></span>
							</div>
							<div style="height: 230px;">
								<div  id="image1" class="img-h">
									<img src="img/ap1.jpg" />
									<div class="ap-1">
									<p>发布：sussie</p>
									<p> 时间：2017-1-10</p>
									<p>地点：东门广场</p>
									<div id="btn-box">
								<a href="appointment.html">
									<button class="btn btn-sm">去看看</button>
								</a>
									</div>
								    </div>
								</div>
								<div  id="image2" class="img-h">
									<img src="img/ap1.jpg"/>
									<div class="ap-1">
									<p>发布：sussie</p>
									<p>时间：2017-1-10</p>
									<p>地点：东门广场</p>
									<div id="btn-box">
									<a href="appointment.html">
									<button class="btn btn-sm">去看看</button>
								    </a>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-sm-12">
							<div class="appiontment">
								<div class="app-title">
									<h3>线上马拉松</h3><span class="more"><a href="#">more+</a></span>
								</div>
							</div>
							<div class="onlinerun">
							<a href="onlinerun.html" class="thumbnail remove">
								<img alt="线上马拉松" src="img/online.jpg">
								<div class="black1">一路同行，感恩有你”2016 感恩节线上马拉松</div>
							</a>
							
							

						   </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="appiontment">
							<div class="app-title">
								<h3>健康向导</h3><span class="more"><a href="guidance.php">more+</a></span>
							</div>
						</div>
						<!--健康向导
						
						健康向导-->
						<div  class="panel h-guidence1">
							<div  class="row h-guidence2" >
									<div class="col-md-6 col-sm-12">
										<div class="baike" >
											<h4>跑步百科</h4>
											<div class="col-md-6 col-sm-12" >
												<img src="img/baike.jpg"  width="100%" />
											</div>
											<div class="col-md-6 col-sm-12" >
												<ul>
													<li><a href="new.html">春季什么运动最减肥</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
												</ul>
											</div>
										 </div>
									</div>
									<div class="col-md-6 col-sm-12" >
										<div class="b-point" >
											<h4>健身指南</h4>
											<div class="col-md-6 col-sm-3" >
												<img src="img/point.jpg" width="100%"/>
											</div>
											<div class="col-md-6 col-sm-3">
												<ul >
													<li><a href="#">春季什么运动最减肥春季什么</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
													<li><a href="#">春季什么运动最减肥</a></li>
												</ul>
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">关于我们</h4>
                    <div class="content friend-links">
                        “华软跑族”</span>
			是华软学院师生自发成立的长跑队，截止目前先后集体参加过3次广州马拉松、2次清远马拉松。
			
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">友情链接</h4>
                    <div class="content tag-cloud">
                       <a href="http://www.guangzhou-marathon.com/" title="广州国际马拉松"  target="_blank">广州国际马拉松</a>
                       <a href="http://www.shenzhenmarathon.org/" title="深圳国际马拉松"  target="_blank">深圳国际马拉</a>
                       <a href="http://www.lanzhoumarathon.org/" title="兰州国际马拉松"  target="_blank">兰州国际马拉松</a>
                       <a href="http://www.shmarathon.com/" title="上海国际马拉松"  target="_blank">上海国际马拉松</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">联系我们</h4>
                    <div class="content friend-links">
                       <address>地址：广东省广州市从化经济区高技术产业园广从南路548号</address> 
                       <p>电话：020－87818918</p>
				       <p>传真：87818020</p>
				       <p>邮编：510990</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--
	end/footer-->
		<!-- 提示框html -->
<div class="toast "></div>
<!-- 登陆框html全局 -->
<div class="loginboxbg"></div>
<div class="loginbox" id="login">
    <img src="img/wlogo.png" class="lblogo">
    <div class="closelb"></div>
    <div class="loginboxinput">
        <form id="boxloginf">
        <div class="v3lbt">
            <label>登录名</label><input type="text" id="name" name="name"maxlength="32" placeholder="请输入手机号或用户名">
        </div>
        <div class="v3lbt">
            <label>密码</label><input type="password" id="psd" name="psd" maxlength="32" placeholder="">
        </div>
        <div class="autologin">
            <label><input type="checkbox" id="auto" name="auto" checked="" value="1">自动登录</label>
        </div>
        <a href="" id="boxlogingo">登录</a>
        <div class="tiplogin"><a href="" data-u="/Member/register.aspx">免费注册</a> 开启您精彩的跑步人生！</div>
        </form>
    </div>
</div>
	</body>
</html>