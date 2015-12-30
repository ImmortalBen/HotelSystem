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
            [['room_num', 'room_type', 'name', 'id_card', 'price'], 'required'],
            [['room_num', 'status', 'id_card', 'price'], 'integer'],
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
            'room_num' => 'Room Num',
            'room_type' => 'Room Type',
            'status' => 'Status',
            'name' => 'Name',
            'id_card' => 'Id Card',
            'price' => 'Price',
        ];
    }
}
