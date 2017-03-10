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
		<link rel="stylesheet" type="text/css" href="./my.css">
		<script src="js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
			<style type="text/css">
				.tz11{
	margin:15px 0 0 -35px;
				}
				.article-right1{
				width: 81px;
				height: 100px;
				margin: 15px 40px 0 0px;
				float: right;
			}
.article-ap{
	width:800px;
	height: 160px;
	margin: 0px auto;
	
}
#p-right1{
	width:1232px;
	float: left;
	margin:20px 0px 0px 50px;
	
}
.r-label{
	margin-left: 20px;
	height: 50px;
}
.r-label{
	margin-left: 20px;
	height: 50px;
}
@media (max-width: 768px) {
				#p-left1{
					display: none;
				
				}
				#p-right1{
					width: 100%;
					margin: 20px;
				}
			}

.r-h{
	height: 90px;
	width: 700px;
	border-bottom: 1px solid #BFB7BC; padding: 20px;
}
.r-h>input{
	font-size: 30px;
	color:#8e8e8e;
	border: none;
}

.postblogbutton{color: #fff;width: 140px;height: 34px;border-radius: 3px;background: #87bb54;text-align: center;display: inline-block;line-height: 34px;}
.postblogbutton:hover,.postblogbutton:focus{color: #fff;}

.postblogbutton{
	color: #fff;
	width: 140px;
	height: 34px;
	border-radius: 3px;
	background: #87bb54;
	text-align: center;
	display: inline-block;
	line-height: 34px;
			}
.postblogbutton:hover,
.postblogbutton:focus{
	color: #fff;
	}


.r-label3{
	font-size: 20px;
	color:#8e8e8e;
	text-align: right;
	display: inline-block;
	width:110px;
	height:50px;
	padding-top: 90px;
	float:left
}

.postbuttonbox{
	padding-top: 12px;
	text-align: center;
	padding-left: 0px;
	padding-right: 0px;
	padding-bottom: 50px;
}

			</style>
	</head>
	<body class="body">
		
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
								<label for="hddd" class="r-label1">活动时间：<?php echo $acttime; ?> &nbsp;请选择开始时间！</label>
								<input type="text" id="" value=""  style="height: 30px;"/>
								<label for="hddd" class="r-label2">持续时间：</label>
								<input type="datetime" id="" value=""  style="height: 30px;"/>
							</div>
							<div class="r-label">
							<label class="r-label1">出发时间：<?php echo $starttime; ?> &nbsp;请选择开始时间！</label>
							<input type="text" id="" value=""  style="height: 30px;"/>
							<label class="r-label2">结束时间：<?php echo $endtime; ?> &nbsp;请选择下线时间,</label>
							<input type="text" id="" value=""  style="height: 30px;"/>
							</div>
							</div>
							<div style="margin-left: 20px;height: 200px; ">
							<label for="hddd" class="r-label3">备注：</label>
							<div style="height: 100px;float: left;margin-top: 50px;">
							<textarea name="" rows="10" cols="70" style="height: 100px;" ></textarea>
							</div>
							</div>
							<div style="border-bottom: 1px solid #AAAAAA;height: 1px;width: 100%;margin-top: 100px;"></div>
							<div class="postbuttonbox">
                            <a class="postblogbutton" href="#">发布约跑</a>
                            </div>
						</div>
					</form>
				</div>
				
	</body>
</html>
