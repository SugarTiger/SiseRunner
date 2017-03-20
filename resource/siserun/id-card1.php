<?php
ini_set('date.timezone','Asia/Shanghai');
include './form.class.php';
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
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<link rel="stylesheet" type="text/css" href="css/自适应ap-css.css"/>
		<link rel="stylesheet" type="text/css" href="css/id-card.css"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<script src="js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="./js/edit.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {

	$('#change').click(function(){


		$('.theme-popover').slideDown(200);

	})

	$('.theme-poptit .close').click(function(){


		$('.theme-popover').slideUp(200);

	})
	})
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
			<a role="menuitem" tabindex="-1" href="id-card1.html#side1" style="color: #009945;">个人中心	</a>
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
								<a href="guidence.html">健康向导</a>
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
								<a href="#">健康向导</a>
							</li>
							<li>
								<a href="#">二货市场</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!--导航end-->
			<div id="p-main" style="width: 100%;" class="container" >
				<div class="row">
				<!--左边start-->
				<section id="p-left1" class="col-md-2">
					<div class="p-img">
						<img src="img/p-card.jpg"/>
					</div>
					<span id="nickname" class="nickname">昵称：</span><br />
					<span id="nickname"  class="nickname">宣言：</span>
					<div class="p-nav">
						<ul>
							<li ><span class="glyphicon glyphicon-user"></spa>&nbsp;我的名片</li>
							<li><span class="glyphicon glyphicon-dashboard"></span>&nbsp;我的约跑</li>
							<li><span class="glyphicon glyphicon-registration-mark"></span>&nbsp;我的指南</li>
						</ul>
					</div>
				</section>
				<!--左边end-->
				<!--右边start-->
				<div id="side1">
				<aside class="aside" id="aside1">
				<div id="p-right1"  >
					    <div class="p-right">
						<div id="nav-form">
						<ul>
							<li class="edit-cur">个人信息</li>
							<li>身体数据</li>
							<li>绑定手机号码</li>
						</ul>
						</div>
						<section class="first_content">
						    <div id="info" class="container container1" >
						        <form class="form-inline " role="form" method="post"  >
							        <div class="row" >
								    	<div class="col-md-6" >
										<label  for="name" class="label-form"><span class="red">*</span>姓名：</label>
										<input type="text" class="form-control" id="name" >
									<br />
									<br />
						           		 <label  for="age" class="label-form" ><span class="red">*</span>年龄：</label>
				                    	 <input type="text" class="form-control" id="age">
				                    <br />
									<br />
				                    	<label  for="email" class="label-form"><span class="red">*</span>邮箱：</label>
				                    	<input type="text" class="form-control" id="email">
				                    	</div>
				                    	<div class="col-md-6" >
										<label  for="sex" class="label-form"><span class="red">*</span>性别：</label>
										<input type="radio" name="sex" value="1" checked="checked">
										男&nbsp;&nbsp;&nbsp;
								    	<input type="radio" name="sex" value="2">女
									<br />
									<br />
						            	<label  for="mobile" class="label-form"><span class="red">*</span>手机号码：</label>
				                   		<input type="text" class="form-control" id="age">
				                    <br />
									<br />
				                    	<label  for="address" class="label-form"><span class="red">*</span>地址：</label>
				                   		<input type="text" class="form-control" id="email">
				                    <br />
									<br />
				                    </div>
				                    <div class="row">
				                    	<div class="col-md-12">
				                    		&nbsp;<label for="xuyan" class="label-form">跑步宣言：</label>
				                    		 <input type="text" class="form-control" id="xuanyan" size="30">
				                    	</div>
				                    </div>
				                    <br />
				                    <div class="row">
				                    	<div class="col-md-12">
				                    		&nbsp;<label for="xuyan" class="label-form">上传头像：</label>
				                    		 <input type="file" class="form-control" id="xuanyan" >
				                    	</div>
				                    </div>
				                    <div class="row" >
				                     	<div class="col-md-12">
				                     		<div class="postbuttonbox">
				                    			<a class="postblogbutton" href="">保存</a>
				                    		</div>
				                     	</div>
				                    </div>
	                            </form>
					        </div>
				    	</section>
				    	</div>
				    	<section class="first_content" style="display: none;">
					        <div id="data"  class="container container1" >
					        <form class="form-inline " role="form" method="post"  >
							<div class="row">
							    <div class="col-md-6">
	    						<label  for="height">身高：</label>
	    						<input type="text" class="form-control" id="height" >
	    						<label  for="height">（厘米）</label>
	    						<br />
	    						<br />
	    			            <label  for="weight">体重：</label>
	                            <input type="text" class="form-control" id="weight">
	                            <label  for="weight">（公斤）</label>
	                            <br />
	    						<br />
	                            <label  for="xiongwei">胸围：</label>
	                            <input type="text" class="form-control" id="xiongwei">
	                            <label  for="xiongwei">（厘米）</label>
	                            <br />
	    						<br />
	                            <label  for="yaowei">腰围：</label>
	                            <input type="text" class="form-control" id="yaowei">
	                            <label  for="yaowei">（厘米）</label>
	                            <br />
	    						<br />
	                            </div>
	                            <div class="col-md-6" >
	                            	<img src="img/body.jpg"/>
	                            </div>
	                          </div>
	                           <div class="row" >
				                     	<div class="col-md-12">
				                     		<div class="postbuttonbox">
				                    			<a class="postblogbutton" href="">保存</a>
				                    		</div>
				                     	</div>
				               </div>
	                            </form>
	                        </div>
					    </section>
					    <section class="first_content" style="display: none;">
					    	<!--右边start-->
								    <div id="phone" class="container container1">
								    	<div class="row">
								    		 <div class="text-center">
								                             已绑定手机号码<span id="">18814127040</span>
								             </div>
								             <div class="check-div form-inline text-center row">
							                 <button class="btn btn-green btn-sm" id="change">更改手机号码</button>
						                     </div>
						                    
								    	</div>
								   </div>
							<!--右边end-->
					    </section>
				</div>
				</aside>
				</div>
				<!--右边end-->
				<!--右边start-->
				<div id="side2">
				<aside class="aside" style="display: none;" id="aside2">
				<div id="p-right1">
					<div class="p-right" >
						<div id="nav-form" class="second_nav">
						<ul>
							<li class="edit-cur">全部约跑</li>
							<li >我发起的</li>
							<li >我参加的</li>
							<li >发起约跑</li>
						</ul>
						</div>
						<!--全部约跑显示的内容-->
						<section class="second_content">
						    <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
								<div class="article-right">
									<input type="button" id="joining2" class="joining" name="joining" value="报名" />
									<a href="appointdetail.html" id="more2">查看全文》</a>
								</div>
							</article>
							 <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
								<div class="article-right">
									<input type="button" id="joining2" class="joining" name="joining" value="报名" />
									<a href="appointdetail.html" id="more2">查看全文》</a>
								</div>
							</article>
							  <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
								<div class="article-right">
									<input type="button" id="joining2" class="joining" name="joining" value="报名" />
									<a href="appointdetail.html" id="more2">查看全文》</a>
								</div>
							</article>
							 <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
								<div class="article-right">
									<input type="button" id="joining2" class="joining" name="joining" value="报名" />
									<a href="appointdetail.html" id="more2">查看全文》</a>
								</div>
							</article>
						</section>
					</div>
						<!--我发起的显示的内容-->
						<section class="second_content" style="display: none;">
							  <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
							</article>
						</section>
						<!--我参加的显示的内容-->
						<section class="second_content" style="display: none;">
						     <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
							</article>
							  <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
							</article>
							  <article id="ap" >
								<div class="article-left tz2">
									<p id="title-g2" class="title">下班小溜一圈</p>
									<br />
									<p id="ap-info2" class="ap-info">发布人：<span id="er">BET</span>&nbsp;&nbsp;&nbsp;&nbsp;活动时间：<span id="time">2016-06-09 17:00</span></p>
									<br />
									<p id="hd-text2" class="hd-text">小溜达一圈</p>
								</div>
							</article>
						</section>
						<section class="second_content" style="display: none;">
							<div class="container1" style="border: 1px solid #BFB7BC;margin-left: 0px;" >

								<form action="" method="post">
									<div class="r-h">
									<input type="text" value="活动名称" />
									</div>
									<div id="" style="margin: 70px;">
										<div style="margin-top: 50px;">
										<div class="r-label1-son">
										<label for="hddd" class="r-label1-son">活动地点：</label>
										<input type="text" id="" value="" size="40" style="width: 250px;height: 25px;border: 1px solid #aeaeae"/>
										</div>
										<div class="r-label1-son">
										<label for="hddd" class="r-label1-son">活动时间：<?php echo $acttime; ?></label>
										<label for="hddd" class="r-label1-son">持续时间：</label>
										<input type="datetime" id="" value=""  style="height: 25px;border: 1px solid #aeaeae;margin-left:-10px" />
										</div>
										<div class="r-label1-son">
										<label class="r-label1-son">出发时间： <?php echo $starttime; ?></label>
										<label class="r-label1-son">结束时间：<?php echo $endtime; ?></label>
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
						</section>
						</div>
				</aside>
				</div>
				<!--右边end-->
				<div id="side3">
				<aside class="aside" style="display: none;" id="aside3">
				<div id="p-right1">
					<div class="p-right" >
						<div id="nav-form" class="third_nav" >
						<ul>
							<li class="edit-cur">我的指南</li>
						</ul>
						</div>
						<section class="third_content container" >
						  <div class="row">
						  	<div class="col-md-8" >
						  		<div class="point">
						  			<h4>体重VS有氧运动　完美健身指南</h4>
						  			<p>很多人在健身房中可能只会关注它们燃烧了多少热量，但显然只关注这一项，你的目光看的有点近噢。不要继续关注健身房中你燃烧了多少热量，去要关注健身房外你消耗了多少卡路里吧。</p>
						  		</div>
						  		<div class="tag row">
						  			<div  class="col-md-3">分类：<span id="ca1">户外</span></div>
						  			<div  class="col-md-3">时间：<span id="ca2">2016.12.8</span></div>
						  			<div id="whole" class="col-md-6" ><a href="#">查看全文</a></div>
						  		</div>
						  	</div>
						  	<div class="clearfix"></div>
						  	<div  class="col-md-8 line1"></div>
						  </div>
						   <div class="row">
						  	<div class="col-md-8" >
						  		<div class="point">
						  			<h4>体重VS有氧运动　完美健身指南</h4>
						  			<p>很多人在健身房中可能只会关注它们燃烧了多少热量，但显然只关注这一项，你的目光看的有点近噢。不要继续关注健身房中你燃烧了多少热量，去要关注健身房外你消耗了多少卡路里吧。</p>
						  		</div>
						  		<div class="tag row">
						  			<div  class="col-md-3">分类：<span id="ca1">户外</span></div>
						  			<div  class="col-md-3">时间：<span id="ca2">2016.12.8</span></div>
						  			<div id="whole" class="col-md-6" ><a href="#">查看全文</a></div>
						  		</div>
						  	</div>
						  	<div class="clearfix"></div>
						  	<div  class="col-md-8 line1"></div>
						  </div>
						  
			            </section>    
					</div>
				</div>
				</aside>
				</div>
				
				<!--右边end-->
			</div>
			</div>
			<!-- 模态框（Modal） -->

		<div class="theme-popover">

     <div class="theme-poptit">

          <a href="javascript:;" title="关闭" class="close">×</a>

          <h4>更改手机号码</h4>

     </div>

     <div class="theme-popbod dform">

           <form class="theme-signin" name="" action="" method="post">

                <ol>
                     <li><strong>登录密码：</strong><input class="ipt" type="text" name="pwd" value="" size="20" /></li>
<br />
                     <li><strong>手机号码：</strong><input class="ipt" type="password" name="phone" value="" size="20" /></li>
                     <li><input class="btn btn-success " type="submit" name="submit" value=" 提交 " /></li>
                </ol>

           </form>

     </div>

</div>

	</body>
</html>
