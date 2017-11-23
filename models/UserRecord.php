<?php
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord {

    public static function tableName()
    {
        return "users";
    }
    public function getUserScore()
    {
        return $this->hasMany(UserscoreRecord::className(),['user_id'=>'id']);
    }

}