<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>健身指南</title>
	<link rel="stylesheet" href="<?php echo base_url('resource/index/css'); ?>/guidance-css.css" />
</head>
<body onload="callBackPagination(Number($('#totalCount1').val()),Number($('#limit').val()))">
	<!--加载时调用callBackPagination方法载入页码，参数是总数据条数和每页显示数量-->
	<!--导航-->
	<header class="col-md-12">
		<div class="mynav">
			<ul class="nav nav-pills">
				<li>
					<a href="#">跑步与四季</a>
				</li>
				<li>
					<a href="#">跑步的好处</a>
				</li>
				<li>
					<a href="#">跑步最佳时间</a>
				</li>
			</ul>
		</div>
	</header>
	<!--主内容-->
	<div class="container">
		<div class="row">
			<!--左-->
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<a href="#">
							<img src="<?php echo base_url('resource/index/img'); ?>/guidance.fw_1.gif" class="pull-left img-rounded myimg">
							<div class="content">
								<h2>春季跑步谨记6点</h2>
								<p>
									春季什么运动最减肥，当然是跑步了，如何跑步跑出纤细身材？
										跑步减肥该是有氧运动瘦身的“老大哥”，有种关于太极拳的说
										法是“易学难精”，这话对于跑步减肥似乎也很当，跑步减肥容
										易开始，却难坚持。看来简单的跑步问题却很复杂啊。
										…[more]
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="#">
							<img src="<?php echo base_url('resource/index/img'); ?>/guidance.fw_1.gif" class="pull-left img-rounded myimg">
							<div class="content">
								<h2>春季跑步谨记6点</h2>
								<p>
									春季什么运动最减肥，当然是跑步了，如何跑步跑出纤细身材？
										跑步减肥该是有氧运动瘦身的“老大哥”，有种关于太极拳的说
										法是“易学难精”，这话对于跑步减肥似乎也很当，跑步减肥容
										易开始，却难坚持。看来简单的跑步问题却很复杂啊。
										…[more]
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="#">
							<img src="<?php echo base_url('resource/index/img'); ?>/guidance.fw_1.gif" class="pull-left img-rounded myimg">
							<div class="content">
								<h2>春季跑步谨记6点</h2>
								<p>
									春季什么运动最减肥，当然是跑步了，如何跑步跑出纤细身材？
										跑步减肥该是有氧运动瘦身的“老大哥”，有种关于太极拳的说
										法是“易学难精”，这话对于跑步减肥似乎也很当，跑步减肥容
										易开始，却难坚持。看来简单的跑步问题却很复杂啊。
										…[more]
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!--右-->
			<div class="col-md-4 hidden-sm hidden-xs">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<h3> <b>标签</b>
										</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">全部</a>
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">春季</a>
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">春季</a>
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">春季</a>
									</div>
									<div class="col-md-6 col-xs-6">
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">春季</a>
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">春季</a>
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">春季</a>
										<a href="#" class="btn btn-custom btn-block" type="button" disabled="true">春季</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h3> <b>最新推荐</b>
										</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-md-6">
										<a href="#" class="thumbnail">
											<img src="<?php echo base_url('resource/index/img'); ?>/guidance.fw_1.gif" alt="最新推荐"></a>
									</div>
									<div class="col-xs-6 col-md-6">
										<a href="#" class="thumbnail">
											<img src="<?php echo base_url('resource/index/img'); ?>/guidance.fw_1.gif" alt="最新推荐"></a>
									</div>
									<div class="col-xs-6 col-md-6">
										<a href="#" class="thumbnail">
											<img src="<?php echo base_url('resource/index/img'); ?>/guidance.fw_1.gif" alt="最新推荐"></a>
									</div>
									<div class="col-xs-6 col-md-6">
										<a href="#" class="thumbnail">
											<img src="<?php echo base_url('resource/index/img'); ?>/guidance.fw_1.gif" alt="最新推荐"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--健身指南-->
		<div class="row">
			<div class="col-md-12">
				<div id="title" class="title">
					<div class="title1"></div>
					<div class="title2">
						<h2>
							<b>健身指南</b>
						</h2>
					</div>
					<div class="title3">
						<a href="#">
							<h4>
								<img src="<?php echo base_url('resource/index/img'); ?>/guidance_share.gif" />
								<b>我要分享</b>
							</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-6  col-sm-4">
						<a href="#" class="thumbnail">
							<img alt="最适合运动前的5种食物" src="<?php echo base_url('resource/index/img'); ?>/guidance_r2_c2.gif"></a>
						<div class="caption">
							<a href="#">
								<h4>最适合运动前的5种食物</h4>
							</a>
							<p>
								分类：
								<a href="#">健身与生活</a>
							</p>
							<p>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r4_c2.gif" class="img-head"/>
									<span>诺亚方舟</span>
								</a>
								<a href="#">
									<a href="#">
										<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r5_c5.gif" class="img-like"/>
									</a>
								</a>
							</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4">
						<a href="#" class="thumbnail">
							<img alt="最适合运动前的5种食物" src="<?php echo base_url('resource/index/img'); ?>/guidance_r2_c2.gif"></a>
						<div class="caption">
							<a href="#">
								<h4>最适合运动前的5种食物</h4>
							</a>
							<p>
								分类：
								<a href="#">健身与生活</a>
							</p>
							<p>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r4_c2.gif" class="img-head"/>
									<span>诺亚方舟</span>
								</a>
								<a href="#">
									<a href="#">
										<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r5_c5.gif" class="img-like"/>
									</a>
								</a>
							</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4">
						<a href="#" class="thumbnail">
							<img alt="最适合运动前的5种食物" src="<?php echo base_url('resource/index/img'); ?>/guidance_r2_c2.gif"></a>
						<div class="caption">
							<a href="#">
								<h4>最适合运动前的5种食物</h4>
							</a>
							<p>
								分类：
								<a href="#">健身与生活</a>
							</p>
							<p>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r4_c2.gif" class="img-head"/>
									<span>诺亚方舟</span>
								</a>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r5_c5.gif" class="img-like"/>
								</a>
							</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4">
						<a href="#" class="thumbnail">
							<img alt="最适合运动前的5种食物" src="<?php echo base_url('resource/index/img'); ?>/guidance_r2_c2.gif"></a>
						<div class="caption">
							<a href="#">
								<h4>最适合运动前的5种食物</h4>
							</a>
							<p>
								分类：
								<a href="#">健身与生活</a>
							</p>
							<p>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r4_c2.gif" class="img-head"/>
									<span>诺亚方舟</span>
								</a>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r5_c5.gif" class="img-like"/>
								</a>
							</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4">
						<a href="#" class="thumbnail">
							<img alt="最适合运动前的5种食物" src="<?php echo base_url('resource/index/img'); ?>/guidance_r2_c2.gif"></a>
						<div class="caption">
							<a href="#">
								<h4>最适合运动前的5种食物</h4>
							</a>
							<p>
								分类：
								<a href="#">健身与生活</a>
							</p>
							<p>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r4_c2.gif" class="img-head"/>
									<span>诺亚方舟</span>
								</a>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r5_c5.gif" class="img-like"/>
								</a>
							</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4">
						<a href="#" class="thumbnail">
							<img alt="最适合运动前的5种食物" src="<?php echo base_url('resource/index/img'); ?>/guidance_r2_c2.gif"></a>
						<div class="caption">
							<a href="#">
								<h4>最适合运动前的5种食物</h4>
							</a>
							<p>
								分类：
								<a href="#">健身与生活</a>
							</p>
							<p>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r4_c2.gif" class="img-head"/>
									<span>诺亚方舟</span>
								</a>
								<a href="#">
									<img src="<?php echo base_url('resource/index/img'); ?>/guidance_r5_c5.gif" class="img-like"/>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--页码-->
	<footer class="col-md-12">
		<div id="callBackPagination" class="piece">
			<div id="callBackPager" class="text-center"></div>
			<!--每页显示数量-->
			<input type="hidden" id="limit" name="limit" value="6">
			<!--为页码提供总数据条数-->
			<input type="hidden" id="totalCount1" name="totalCount1" value="100">
			<!--存放选择的页码-->
			<input type="hidden" name="page" id="page" value="1"/>
		</div>
	</footer>
	<script type="text/javascript" src="<?php echo base_url('resource/index/js'); ?>/extendPagination.js" ></script>
</body>
</html>