<?php


namespace app\models;
use Yii;


class Authors extends \yii\db\ActiveRecord
{

//    public $name;
//    public $surname;
//    public $patronymic;
//    public $date;
//    public $genre;

    public static function tableName()
    {
        return 'authors';
    }

    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'genre', 'date'], 'required'],
            [['date'], 'date', 'format' => 'yyyy-MM-dd'],
            [['name', 'surname', 'patronymic', 'genre'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'name',
            'surname' => 'surname',
            'patronymic' => 'patronymic',
            'genre' => 'genre',
            'date' => 'date'
        ];

    }

}