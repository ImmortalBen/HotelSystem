<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
$this->title = '预订房间';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'image',
                'format' => 'html',    
                'value' => function ($model) {
                    if ($model->room_type=='大床房'){
                        return Html::img(Yii::getAlias('@web').'/images/onebed.jpg',['width' => '70px']);
                    }
                    elseif ($model->room_type=='双床房'){
                        return Html::img(Yii::getAlias('@web').'/images/doublebed.jpg',['width' => '70px']);
                    }
                    elseif ($model->room_type=='高级套房'){
                        return Html::img(Yii::getAlias('@web').'/images/suite.jpg',['width' => '70px']);
                    }
                    
                },
            ],
            'room_num',
            'room_type',
            
            [
                'attribute' => 'status',
                'value' => function($model) {
                    if ($model->status == 0){
                        return '无人入住';
                    }
                    elseif ($model->status == 1){
                        return '已入住';
                    }
                    else{
                        return $model->status;
                    }
                }
            ],
            'price',

            //['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'template' => '{book_detail}',
                'buttons' => [
                'book_detail' => function ($url, $model, $key) {
                     return $model->status == 0 ? 
                                    Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, ['title' => '预订'] ) : ''; 
                                 },
                ],
                 'headerOptions' => ['width' => '80'],
                ],
            ],
    ]); ?>

</div>
