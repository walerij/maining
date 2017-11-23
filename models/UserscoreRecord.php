<?php
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class UserscoreRecord extends ActiveRecord {
    public static function tableName()
    {
        return "userscore";
    }
}
