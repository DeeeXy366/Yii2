<?php

namespace app\models;

use yii\db\ActiveRecord;

class AddCountry extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }

    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],
        ];
    }
}