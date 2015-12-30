<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '房间管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Room', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
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
            'name',
            //'id_card',
            'price',
            
            //['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn','header'=>'操作','template' => '{check_out} {view} {update} {delete}',
                'buttons' => [
                'check_out' => function ($url, $model, $key) {
                        if ($model->status == 0){
                            return;
                        }
                        else if ($model->status == 1){
                            return  Html::a('<span class="glyphicon glyphicon-log-out"></span>', $url, ['title' => '退房'] ) ;
                        }
                     },
                ],
               'headerOptions' => ['width' => '90']
            ],      
        ],
    ]); ?>

</div>
