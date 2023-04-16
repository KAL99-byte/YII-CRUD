<?php
namespace app\models;
use yii\db\ActiveRecord;

class student extends ActiveRecord
{
    public static function tableName()
    {
        return 'student';
    }

    public function rules()
    {
        return[
            [['name','email','country','city','district'],'required'],
            ['email','email'],
            ['email','unique'],

        ];
    }
}