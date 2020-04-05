<?php

namespace app\models;

use yii\db\ActiveRecord;

class RandomNumber extends ActiveRecord
{
    public static function tableName()
    {
        return '{{random_numbers}}';
    }
}
