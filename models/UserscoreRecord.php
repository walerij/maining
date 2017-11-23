<?php
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class UserscoreRecord extends ActiveRecord {
    public static function tableName()
    {
        return "userscore";
    }
    
    public function setScore($userscoreForm)
    {
        $this->userid=$userscoreForm->userid;
        $this->score=$userscoreForm->score;
         
        $this->userscoreorg=$userscoreForm->userscoreorg;
        $this->userscorenumber=$userscoreForm->userscorenumber;
          
    }
}
