<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '功能介绍';
$this->params['breadcrumbs'][] = $this->title;
?>

<html>
	<head>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<style type="text/css">
			.totop{position:fixed;right:5%;bottom:10%;display:block;width:26px;height:62px;background:url(<?=Yii::$app->request->baseUrl.'/../images/rocket.png'; ?>) no-repeat 0 0;-webkit-transition: all 0.2s ease-in-out;}
			.totop:hover{background:url( <?=Yii::$app->request->baseUrl.'/../images/rocket.png'; ?>) no-repeat 0 -62px;}
			
			.row{height:250px;font-family:仿宋;line-height:1.7em;font-size:25px;font-weight:bold;}
		</style>
		<script src=" <?=Yii::$app->request->baseUrl.'/../views/site/gotoTop.js';?>"></script>	
	</head>
</html>


    <h1><?= Html::encode($this->title) ?></h1>

      <div class="container" style="padding:20px;">

        <div style="padding: 20px;">
			<div class="main_content" >
				<div class="row" >
					<div class="col-xs-4">
					<img src="<?=Yii::$app->request->baseUrl.'/../images/download.jpg'; ?>" style="float:left;" width="200" height="200">
					</div>
					<div class="col-xs-8" >
					酒店经理管理系统：<br/>
					<p style="padding:0 2em;">酒店经理拥有员工账号管理功能和酒店收支情况查看功能。员工账号管理功能可以查看，增加，修改，删除员工账号，酒店收支情况查看功能可以查看到近三日的收入支出和盈利情况。</p>
					</div>
				</div>					
				<HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="80%" color=#987cb9 SIZE=3>				
				<div class="row">
					<div class="col-xs-8">
					前台接待管理系统：<br/>				
					<p style="padding:0 2em;">前台接待主要完成了酒店客房的预定、住房和订房功能。退房时(将房间状态由已住改为空房),自动在账目表中添加一行，将房费添加至酒店收入中。</p>
					</div>
					<div class="col-xs-4">
					<img src="<?=Yii::$app->request->baseUrl.'/../images/cloud.jpg';?>" width="200" height="200">
					</div>
				</div>				
				<hr style="filter: alpha(opacity=100, finishopacity=0, style=3)" width="80%" color=#987cb9 SIZE=3>				
				<div class="row" >
					<div class="col-xs-4">
					<img src="<?=Yii::$app->request->baseUrl.'/../images/lib.jpg';?>" style="float:left;" width="200" height="200">
					</div>
					<div class="col-xs-8">
					餐饮部门管理系统：<br/>
					<p style="padding:0 2em;">餐饮部门可以添加新的餐饮账目，添加至账目表。</p>
					</div>
				</div>
				<hr style="filter: alpha(opacity=100, finishopacity=0, style=3)" width="80%" color=#987cb9 SIZE=3>				
				<div class="row">
					<div class="col-xs-8">
					财务部门账务管理系统：<br/>				
					<p style="padding:0 2em;">财务部门员工拥有酒店账目管理的功能，可以增加，删除，修改，查询酒店账目信息。</p>
					</div>
					<div class="col-xs-4">
					<img src="<?=Yii::$app->request->baseUrl.'/../images/cloud.jpg';?>" width="200" height="200">
					</div>
				</div>				

			</div>
		</div>
    </div>

<a href="#" onclick="gotoTop();return false;" class="totop" ></a>

