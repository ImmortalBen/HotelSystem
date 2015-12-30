<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '数据库课程设计小组';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="padding-bottom:40px">
    <h1><?= Html::encode($this->title) ?></h1>
	<table class="table table-striped table-hover" style="width:70%">
		<tr class="info">
			<th> 成员  </th>
			<th> 工作  </th>
		</tr>
		<tr class="success">
			<td> 尹恺彬(组长)</td>
			<td> Web端开发 </td>
		</tr>
		<tr>
			<td> 陆耀聪 </td>
			<td> 产品设计报告及数据测试 </td>
		</tr>
	</table>
</div>
