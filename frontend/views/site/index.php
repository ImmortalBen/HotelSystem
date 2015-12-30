<?php

/* @var $this yii\web\View */

$this->title = '模拟酒店系统';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>模拟酒店系统</h1>

        <p class="lead">酒店系统分为前端和后端管理，前端供酒店会员订房，后端供管理员管理酒店系统</p>

        <p><a class="btn btn-lg btn-success" href='?r=book/book_list'> 点此订房</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>会员预定系统</h2>

                <p>旅客可注册网站会员，并在网站上预订酒店房间。在预订页可以看到当前可以预订房间的类型和数量。在预订之后，可以查看我的订单</p>

                <p><a class="btn btn-default" href="?r=book/book_list">点此进入 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>后台订单管理</h2>

                <p>管理员可在后台订单管理看到酒店所有订单详情，包括：入住人，预订时间，入住/离店时间，订单价格等</p>

                <p><a class="btn btn-default" href="?r=book">点此进入 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>后台房间管理</h2>

                <p>管理员可在后台房间系统看到酒店当前所有房间的详细信息。包括：房间号、房型、入住人、入住人身份证号等</p>

                <p><a class="btn btn-default" href="?r=room">点此进入 &raquo;</a></p>
            </div>
            
        </div>

    </div>
</div>
