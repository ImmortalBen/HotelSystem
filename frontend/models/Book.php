<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_card
 * @property string $date_create
 * @property string $date_from
 * @property string $date_to
 * @property integer $price
 * @property integer $room_id
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_card', 'date_from', 'date_to', 'room_id'], 'required'],
            [['date_create', 'date_from', 'date_to'], 'safe'],
            [['price', 'room_id'], 'integer'],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '订单号',
            'name' => '姓名',
            'date_create' => '预订日期',
            'date_from' => '入住日期',
            'date_to' => '离店日期',
            'price' => '价格',
            'room_id' => 'Room ID',
            'id_card' => '身份证号',
        ];
    }
}
