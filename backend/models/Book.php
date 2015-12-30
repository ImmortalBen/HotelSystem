<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $name
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
            [['name', 'date_create', 'date_from', 'date_to', 'price', 'room_id'], 'required'],
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
            'id' => 'ID',
            'name' => 'Name',
            'date_create' => 'Date Create',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
            'price' => 'Price',
            'room_id' => 'Room ID',
        ];
    }
}
