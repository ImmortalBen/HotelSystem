<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property integer $room_num
 * @property string $room_type
 * @property integer $status
 * @property string $name
 * @property integer $id_card
 * @property integer $price
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_num', 'room_type', 'price'], 'required'],
            [['room_num', 'status', 'price', 'id_card'], 'integer'],
            [['room_type'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_num' => '房间号',
            'room_type' => '房型',
            'status' => '状态',
            'name' => '姓名',
            'id_card' => '身份证号',
            'price' => '价格',
        ];
    }
}
